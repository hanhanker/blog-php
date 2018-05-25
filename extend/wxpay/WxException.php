<?php
/* 错误处理 */
class WxException extends Exception {
	public function errorMessage() {
		return $this->getMessage ();
	}
}

?>