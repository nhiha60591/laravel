<?php
function message_flash($msg = '', $type='alert-success', $label = 'Success!'){
	Session::flash('flash_message', $msg );
    Session::flash('flash_type', $type);
    Session::flash('flash_label', $label);
}