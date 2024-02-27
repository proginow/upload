<?php

/*
 * Copyright (c) Proginow (https://proginow.com/)
 */

$dir = __DIR__.'/src/';

require_once $dir.'Throwable/Error.php';
require_once $dir.'Throwable/Exception.php';
require_once $dir.'Throwable/FileTooLargeException.php';
require_once $dir.'Throwable/FileUploadsDisabledError.php';
require_once $dir.'Throwable/FileWriteError.php';
require_once $dir.'Throwable/InputNotFoundException.php';
require_once $dir.'Throwable/InputNotSpecifiedError.php';
require_once $dir.'Throwable/InvalidExtensionException.php';
require_once $dir.'Throwable/InvalidFilenameException.php';
require_once $dir.'Throwable/TargetDirectoryNotSpecifiedError.php';
require_once $dir.'Throwable/TargetFileWriteError.php';
require_once $dir.'Throwable/TempFileWriteError.php';
require_once $dir.'Throwable/TempDirectoryNotFoundError.php';
require_once $dir.'Throwable/TotalSizeExceededError.php';
require_once $dir.'Throwable/UploadCancelledError.php';
require_once $dir.'Throwable/UploadCancelledException.php';
require_once $dir.'AbstractUpload.php';
require_once $dir.'Base64Upload.php';
require_once $dir.'DataUriUpload.php';
require_once $dir.'Directory.php';
require_once $dir.'File.php';
require_once $dir.'FileUpload.php';

?>
