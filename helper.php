<?php

// Charge une lib css ou js si elles existe (avec sa signature)
function loadAsset( $path ) {
	$path = trim( $path, '/' );
	$file = noop::get( 'app/path' ).'/public/'.$path;
	if( is_file( $file ) ) {
		$i = pathinfo( $path );
		$sign = substr( hash_file( 'md5', $file ), 0, 6 );
		$signedPath = $i['dirname'].'/'.$i['filename'].'-'.$sign.'.'.$i['extension'];
		switch( $i['extension'] ) {
			case 'css':
				return '<link rel="stylesheet" href="'.$signedPath.'">';
			case 'js':
				return '<script src="'.$signedPath.'"></script>';
			default:
				throw new NoopException( 'Wrong file extension', 500 );
		}
	}
}