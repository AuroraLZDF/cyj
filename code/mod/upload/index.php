<?php
if (!defined('IN_BOOT')) {
    exit('Access Denied');
}

class upload
{
    public function __construct()
    {

        global $segments;
        $ac = $segments['ac'];
        //checkCk();
        $ac = ac_explode($ac);
        $ac = in_array($ac, array('index', 'file', 'flash', 'video', 'images', 'gameScreen')) ? $ac : 'error';
        call_user_func(array($this, $ac . 'Func'), $ac);
    }


    public function indexFunc()
    {

        if (!isset($_COOKIE["PHPSESSID"])) {
            echo json_encode(array('mes' => '提交错误', 'code' => 2));
            exit;
        }
//		session_id(authcode($_COOKIE["PHPSESSID"]));
        @session_start();
        if ($_COOKIE["PHPSESSID"] != session_id()) {
            echo json_encode(array('mes' => '非法提交', 'code' => 2));
            exit;
        }


        $arr = $this->uploadRun($_FILES['file'], 'cyj/' . date("Y") . '/' . date('m') . '/');
        echo json_encode($arr);
        exit;
    }

    public function imagesFunc(){
        if (!isset($_POST["PHPSESSID"])) {
            echo json_encode(array('mes' => '提交错误', 'code' => 2));
            exit;
        }
        session_id(authcode($_POST["PHPSESSID"]));
        @session_start();
        if (authcode($_POST["PHPSESSID"]) != session_id()) {
            echo json_encode(array('mes' => '非法提交', 'code' => 2));
            exit;
        }
        $arr = $this->uploadRunImages($_FILES['file'], 'cyj/' . date("Y") . '/' . date('m') . '/');
        echo json_encode($arr);
        exit;
    }

    public function fileFunc()
    {
        if (isset($_POST["PHPSESSID"])) {
            session_id(authcode($_POST["PHPSESSID"]));
            @session_start();
            if (authcode($_POST["PHPSESSID"]) != session_id()) {
                echo json_encode(array('mes' => '非法提交', 'code' => 2));
                exit;
            }
        } elseif (!session_id()) {
            echo json_encode(array('mes' => '提交错误', 'code' => 2));
            exit;
        }
        $arr = $this->uploadZip(!empty($_FILES['file']) ? $_FILES['file'] : $_FILES['Filedata'], ROOT . "/log/", 'cyj/' . date("Y") . '/' . date('m') . '/');
        echo json_encode($arr);
        exit;
    }

    public function flashFunc()
    {
        if (isset($_POST["PHPSESSID"])) {
            session_id(authcode($_POST["PHPSESSID"]));
            @session_start();
            if (authcode($_POST["PHPSESSID"]) != session_id()) {
                echo json_encode(array('mes' => '非法提交', 'code' => 2));
                exit;
            }
        } elseif (!session_id()) {
            echo json_encode(array('mes' => '提交错误', 'code' => 2));
            exit;
        }
        $arr = $this->uploadFlash(!empty($_FILES['file']) ? $_FILES['file'] : $_FILES['Filedata'], 'cyj/' . date("Y") . '/' . date('m') . '/');

        echo json_encode($arr);
        exit;
    }

    public function videoFunc()
    {
        $params = array();
        param_request(array('from_start' => "INT"), '', $params, array('from_start' => 0));
        $from_start = 10;

        if (isset($_POST["PHPSESSID"])) {
            session_id(authcode($_POST["PHPSESSID"]));
            @session_start();
            if (authcode($_POST["PHPSESSID"]) != session_id()) {
                echo json_encode(array('mes' => '非法提交', 'code' => 2));
                exit;
            }
        } elseif (!session_id()) {
            echo json_encode(array('mes' => '提交错误', 'code' => 2));
            exit;
        }

        $arr = $this->uploadVideo($_FILES['file'], 'cyj/' . date("Y") . '/' . date('m') . '/', $from_start);

        echo json_encode($arr);
        exit;

    }

    public function gameScreenFunc()
    {
        if (!isset($_POST["PHPSESSID"])) {
            echo json_encode(array('mes' => '提交错误', 'code' => 2));
            exit;
        }
        session_id(authcode($_POST["PHPSESSID"]));
        @session_start();
        if (authcode($_POST["PHPSESSID"]) != session_id()) {
            echo json_encode(array('mes' => '非法提交', 'code' => 2));
            exit;
        }
        //$arr = $this->uploadRunPhoneSS($_FILES['file'], ROOT . '/' . TEMPLATE . '/images/cyj/');
        $arr = $this->uploadRunPhoneSS($_FILES['file'], '/images/cyj/');
        echo json_encode($arr);
        exit;
    }

    public function uploadVideo($file, $save_path, $from_start)

    {
        global $_SC;
        $max_file_size_in_bytes = 209715200;                // 2M in bytes
        $uploadErrors = array(
            0 => "文件上传成功",
            1 => "上传的文件超过了 php.ini 文件中的 upload_max_filesize directive 里的设置",
            2 => "上传的文件超过了 HTML form 文件中的 MAX_FILE_SIZE directive 里的设置",
            3 => "上传的文件仅为部分文件",
            4 => "没有文件上传",
            6 => "缺少临时文件夹"
        );
        if (!isset($file)) {
            return array('mes' => '找不到文件', 'code' => 2);
        } else if (isset($file["error"]) && $file["error"] != 0) {
            return array('mes' => $uploadErrors[$file["error"]], 'code' => 2);
        } else if (!isset($file["tmp_name"]) || !@is_uploaded_file($file["tmp_name"])) {
            return array('mes' => '文件无法上传', 'code' => 2);
        } else if (!isset($file['name'])) {
            return array('mes' => '文件名不存在', 'code' => 2);
        }
        $file_size = @filesize($file["tmp_name"]);
        if (!$file_size || $file_size > $max_file_size_in_bytes) {
            return array('mes' => '文件size太大', 'code' => 2);
        }
        if ($file_size <= 0) {
            return array('mes' => '文件大小不能为0', 'code' => 2);
        }
        $path_info = pathinfo($file['name']);
        $file_extension = $path_info["extension"];
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = strtolower(finfo_file($finfo, $file["tmp_name"]));
            finfo_close($finfo);
        } else {
            $mimetype = strtolower(mime_content_type($file['tmp_name']));
        }

        if (!in_array($file_extension, Ad_Img::$videoMime)) {
            return array('mes' => '文件类型错误:', 'code' => 2);
        }
        $fmd5 = md5_file($file["tmp_name"]);
        $file_name = $save_path . $fmd5 . '.' . $file_extension;
        $ftp = new Ftp($_SC['ftp_host'], $_SC['ftp_port'], $_SC['ftp_user'], $_SC['ftp_pass']);
        if ($ftp->up_file($file["tmp_name"], $file_name)) {
            $video_img_name = $save_path . $fmd5 . ".jpg";
            $video_img_size = Ad_Img::$type_size[36];
            $video_img_size = explode("_", $video_img_size);
            $ftp_path = Ad_User::$ftp_path;
            $this->convertToFlv($ftp_path['path'] . $file_name, $ftp_path['path'] . $video_img_name, $from_start, $video_img_size[0], $video_img_size[1]);
            return array('mes' => '文件上传成功', 'code' => 1, 'video_url' => $file_name, 'img_url' => $video_img_name);
        } else {
            return array('mes' => $file_name, 'code' => 2);
        }
    }

    //生成视频截图
    public function convertToFlv($input, $output, $start_time, $width, $height)
    {
        $command = "ffmpeg -v 0 -y -i " . $input . " -vframes 1 -ss  " . $start_time . "  -t 0.001 -f mjpeg -s " . $width . "x" . $height . "  $output ";
        exec($command);
    }

    public function uploadFlash($file, $save_path)
    {
        global $_SC;
        $max_file_size_in_bytes = 2097152;                // 2M in bytes
        $uploadErrors = array(
            0 => "文件上传成功",
            1 => "上传的文件超过了 php.ini 文件中的 upload_max_filesize directive 里的设置",
            2 => "上传的文件超过了 HTML form 文件中的 MAX_FILE_SIZE directive 里的设置",
            3 => "上传的文件仅为部分文件",
            4 => "没有文件上传",
            6 => "缺少临时文件夹"
        );
        if (!isset($file)) {
            return array('mes' => '找不到文件', 'code' => 2);
        } else if (isset($file["error"]) && $file["error"] != 0) {
            return array('mes' => $uploadErrors[$file["error"]], 'code' => 2);
        } else if (!isset($file["tmp_name"]) || !@is_uploaded_file($file["tmp_name"])) {
            return array('mes' => '文件无法上传', 'code' => 2);
        } else if (!isset($file['name'])) {
            return array('mes' => '文件名不存在', 'code' => 2);
        }
        $file_size = @filesize($file["tmp_name"]);
        if (!$file_size || $file_size > $max_file_size_in_bytes) {
            return array('mes' => '文件size太大', 'code' => 2);
        }
        if ($file_size <= 0) {
            return array('mes' => '文件大小不能为0', 'code' => 2);
        }
        $path_info = pathinfo($file['name']);
        $file_extension = $path_info["extension"];
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = strtolower(finfo_file($finfo, $file["tmp_name"]));
            finfo_close($finfo);
        } else {
            $mimetype = strtolower(mime_content_type($file['tmp_name']));
        }
        if (!in_array($mimetype, Ad_Img::$flashMime)) {
            return array('mes' => '文件类型错误:', 'code' => 2);
        }
        $fmd5 = md5_file($file["tmp_name"]);
        $file_name = $save_path . $fmd5 . '.' . $file_extension;
        $ftp = new Ftp($_SC['ftp_host'], $_SC['ftp_port'], $_SC['ftp_user'], $_SC['ftp_pass']);
        if ($ftp->up_file($file["tmp_name"], $file_name)) {
            $s = getimagesize($file["tmp_name"]);
            return array('mes' => '文件上传成功', 'code' => 1, 'url' => $file_name, 'width' => $s[0], 'height' => $s[1]);
        } else {
            return array('mes' => $file_name, 'code' => 2);
        }
    }

    private function uploadZip($file, $save_path, $ftp_dir)
    {
        global $_SC;
        $max_file_size_in_bytes = 2097152;                // 2M in bytes
        $uploadErrors = array(
            0 => "文件上传成功",
            1 => "上传的文件超过了 php.ini 文件中的 upload_max_filesize directive 里的设置",
            2 => "上传的文件超过了 HTML form 文件中的 MAX_FILE_SIZE directive 里的设置",
            3 => "上传的文件仅为部分文件",
            4 => "没有文件上传",
            6 => "缺少临时文件夹"
        );
        if (!isset($file)) {
            return array('mes' => '找不到文件', 'code' => 2);
        } else if (isset($file["error"]) && $file["error"] != 0) {
            return array('mes' => $uploadErrors[$file["error"]], 'code' => 2);
        } else if (!isset($file["tmp_name"]) || !@is_uploaded_file($file["tmp_name"])) {
            return array('mes' => '文件无法上传', 'code' => 2);
        } else if (!isset($file['name'])) {
            return array('mes' => '文件名不存在', 'code' => 2);
        }
        $file_size = @filesize($file["tmp_name"]);
        if (!$file_size || $file_size > $max_file_size_in_bytes) {
            return array('mes' => '文件size太大', 'code' => 2);
        }
        if ($file_size <= 0) {
            return array('mes' => '文件大小不能为0', 'code' => 2);
        }
        $path_info = pathinfo($file['name']);
        $file_extension = $path_info["extension"];
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = strtolower(finfo_file($finfo, $file["tmp_name"]));
            finfo_close($finfo);
        } else {
            $mimetype = strtolower(mime_content_type($file['tmp_name']));
        }
        if (!in_array($mimetype, Ad_Img::$zipMime)) {
            return array('mes' => '文件类型错误:', 'code' => 2);
        }
        $fmd5 = md5_file($file["tmp_name"]);
        $file_name = $save_path . $fmd5 . '.' . $file_extension;
        $_file_name = $ftp_dir . $fmd5;
        if (move_uploaded_file($file["tmp_name"], $file_name)) {
            $file_info = pathinfo($file_name);
            list($dir, $ext) = array($file_info['dirname'] . "/" . $fmd5, $file_info['extension']);
            $files = get_zip_originalsize($file_name, $dir . "/");
            $ftp = new Ftp($_SC['ftp_host'], $_SC['ftp_port'], $_SC['ftp_user'], $_SC['ftp_pass']);
            $e = 1;
            foreach ($files as $file) {
                if (!is_file($save_path . $fmd5 . '/' . $file)) {
                    continue;
                }
                if (!$ftp->up_file($save_path . $fmd5 . '/' . $file, $_file_name . "/" . $file)) {
                    $e = 0;
                }
                $_files[] = $_file_name . "/" . $file;
            }
            if (unlink($file_name) && deldir($dir)) {
                $e = 0;
            }

            return array('mes' => '上传成功并解压', 'code' => 1, 'url' => $_files);
        } else {
            return array('mes' => '上传失败', 'code' => 2);

        }
    }

    private function uploadRun($file, $save_path)
    {
        global $_SC;
        $max_file_size_in_bytes = 2097152;                // 2M in bytes
        $uploadErrors = array(
            0 => "文件上传成功",
            1 => "上传的文件超过了 php.ini 文件中的 upload_max_filesize directive 里的设置",
            2 => "上传的文件超过了 HTML form 文件中的 MAX_FILE_SIZE directive 里的设置",
            3 => "上传的文件仅为部分文件",
            4 => "没有文件上传",
            6 => "缺少临时文件夹"
        );
        if (!isset($file)) {
            return array('mes' => '找不到文件', 'code' => 2);
        } else if (isset($file["error"]) && $file["error"] != 0) {
            return array('mes' => $uploadErrors[$file["error"]], 'code' => 2);
        } else if (!isset($file["tmp_name"]) || !@is_uploaded_file($file["tmp_name"])) {
            return array('mes' => '文件无法上传', 'code' => 2);
        } else if (!isset($file['name'])) {
            return array('mes' => '文件名不存在', 'code' => 2);
        }
        $file_size = @filesize($file["tmp_name"]);
        if (!$file_size || $file_size > $max_file_size_in_bytes) {
            return array('mes' => '文件size太大', 'code' => 2);
        }
        if ($file_size <= 0) {
            return array('mes' => '文件大小不能为0', 'code' => 2);
        }
        $path_info = pathinfo($file['name']);
        $file_extension = $path_info["extension"];
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = strtolower(finfo_file($finfo, $file["tmp_name"]));
            finfo_close($finfo);
        } else {
            $mimetype = strtolower(mime_content_type($file['tmp_name']));
        }
        if (!in_array($mimetype, Ad_Img::$mime)) {
            return array('mes' => '文件类型错误:', 'code' => 2);
        }




        $fmd5 = md5_file($file["tmp_name"]);
        $file_name = $save_path . $fmd5 . '.' . $file_extension;

        $ftp = new Ftp($_SC['ftp_host'], $_SC['ftp_port'], $_SC['ftp_user'], $_SC['ftp_pass']);



        if ($ftp->up_file($file["tmp_name"], $file_name)) {

            $s = getimagesize($file["tmp_name"]);
            //裁剪图片
            /*foreach(Ad_Img::$IMG_W_H as $v){
                self::image_resize($file["tmp_name"],$file_name."_{$v['w']}x{$v['h']}.".$file_extension,$v['w'],$v['h'],$fmd5,$file_extension);
            }*/
            return array('mes' => '文件上传成功', 'code' => 1, 'url' => $file_name, 'width' => $s[0], 'height' => $s[1]);
        } else {
            return array('mes' => $file_name, 'code' => 2);
        }
    }

    public function uploadRunImages($file, $save_path)
    {
        global $_SC;
        $max_file_size_in_bytes = 2097152; // 2M in bytes
        $uploadErrors = array(0 => "文件上传成功",
            1 => "上传的文件超过了 php.ini 文件中的 upload_max_filesize directive 里的设置",
            2 => "上传的文件超过了 HTML form 文件中的 MAX_FILE_SIZE directive 里的设置",
            3 => "上传的文件仅为部分文件",
            4 => "没有文件上传",
            6 => "缺少临时文件夹"
        );
        if (!isset($file)) {
            return array('mes' => '找不到文件', 'code' => 2);
        } else if (isset($file["error"]) && $file["error"] != 0) {
            return array('mes' => $uploadErrors[$file["error"]], 'code' => 2);
        } else if (!isset($file["tmp_name"]) || !@is_uploaded_file($file["tmp_name"])) {
            return array('mes' => '文件无法上传', 'code' => 2);
        } else if (!isset($file['name'])) {
            return array('mes' => '文件名不存在', 'code' => 2);
        }
        $file_size = @filesize($file["tmp_name"]);
        if (!$file_size || $file_size > $max_file_size_in_bytes) {
            return array('mes' => '文件size太大', 'code' => 2);
        }
        if ($file_size <= 0) {
            return array('mes' => '文件大小不能为0', 'code' => 2);
        }
        $path_info = pathinfo($file['name']);
        $file_extension = $path_info["extension"];

        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = strtolower(finfo_file($finfo, $file["tmp_name"]));
            finfo_close($finfo);
        } else {
            $mimetype = strtolower(mime_content_type($file['tmp_name']));
        }
        if (!in_array($mimetype, Ad_Img:: $mime)) {
            return array('mes' => '文件类型错误', 'code' => 2);
        }

        // 检查文件尺寸，根据position获取尺寸要求
        $imagesize = getimagesize($file["tmp_name"]);
        $position = $_POST['key'];
        $rules = Ad_Img::$type_size;
        $size = explode('_', $rules[$position]);
        //$_width = $size['0'];
        //$_height = $size['1'];

        if ($size['0'] != $imagesize[0] || $size['1'] != $imagesize[1]) {
            return array('mes' => '文件尺寸不符合要求！', 'code' => 2);
        }

        $fmd5 = md5_file($file["tmp_name"]);
        $file_name = $save_path . $fmd5 . '.' . $file_extension;

        $ftp = new Ftp($_SC['ftp_host'], $_SC['ftp_port'], $_SC['ftp_user'], $_SC['ftp_pass']);

        if ($ftp->up_file($file["tmp_name"], $file_name)) {
            $s = getimagesize($file["tmp_name"]);
            return array('mes' => '文件上传成功', 'code' => 1, 'url' => $file_name, 'width' => $s[0], 'height' => $s[1], 'ext' => $file_extension, 'position' => $position);
        } else {
            return array('mes' => $file_name, 'code' => 2);
        }
    }

    private function uploadRunPhoneSS($file, $save_path)
    {
        global $_SC;
        $max_file_size_in_bytes = 2097152; // 2M in bytes
        $uploadErrors = array(0 => "文件上传成功",
            1 => "上传的文件超过了 php.ini 文件中的 upload_max_filesize directive 里的设置",
            2 => "上传的文件超过了 HTML form 文件中的 MAX_FILE_SIZE directive 里的设置",
            3 => "上传的文件仅为部分文件",
            4 => "没有文件上传",
            6 => "缺少临时文件夹"
        );

        if (!isset($file)) {
            return array('mes' => '找不到文件', 'code' => 2);
        } else if (isset($file["error"]) && $file["error"] != 0) {
            return array('mes' => $uploadErrors[$file["error"]], 'code' => 2);
        } else if (!isset($file["tmp_name"]) || !@is_uploaded_file($file["tmp_name"])) {
            return array('mes' => '文件无法上传', 'code' => 2);
        } else if (!isset($file['name'])) {
            return array('mes' => '文件名不存在', 'code' => 2);
        }
        $file_size = @filesize($file["tmp_name"]);
        if (!$file_size || $file_size > $max_file_size_in_bytes) {
            return array('mes' => '文件size太大', 'code' => 2);
        }
        if ($file_size <= 0) {
            return array('mes' => '文件大小不能为0', 'code' => 2);
        }
        $path_info = pathinfo($file['name']);
        $file_extension = $path_info["extension"];
        if (function_exists('finfo_open')) {
            $finfo = finfo_open(FILEINFO_MIME_TYPE);
            $mimetype = strtolower(finfo_file($finfo, $file["tmp_name"]));
            finfo_close($finfo);
        } else {
            $mimetype = strtolower(mime_content_type($file['tmp_name']));
        }
        if (!in_array($mimetype, Oa_Img:: $mime)) {
            return array('mes' => '文件类型错误', 'code' => 2);
        }
        // 检查文件尺寸，根据position获取尺寸要求

        $fmd5 = md5_file($file["tmp_name"]);
        $file_name = $save_path . $fmd5 . '.' . $file_extension;
        $file_name = str_replace('\\', '/', $file_name);
        //$ftp = new Ftp($_SC['ftp_host'], $_SC['ftp_port'], $_SC['ftp_user'], $_SC['ftp_pass']);
        //if ($ftp->up_file($file["tmp_name"], $file_name)) {
        $file_name = '/data/home/qxu1192580252/htdocs' . $file_name;
        if(move_uploaded_file($file["tmp_name"], $file_name)){
            //$s = getimagesize($file["tmp_name"]);
            $s = getimagesize($file_name);
            return array('mes' => '文件上传成功', 'code' => 1, 'url' => '/images/cyj/' . $fmd5 . '.' . $file_extension, 'width' => $s[0], 'height' => $s[1], 'position' => $position, 'ext' => $file_extension);
        } else {
            return array('mes' => $file_name, 'code' => 2);
        }
    }
}

new upload();
//The end of file :/code/mod/upload/index.php