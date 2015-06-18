<?php
add_action('template_redirect','kwm_force_download');
function kwm_force_download() {
	
	$arrayUrl = explode('/', $_SERVER['REQUEST_URI']);

	$options = get_option('kwm_force_download');
		
	$kwmurlDownload = 'downloads';
	if($options['urlDownload'] != ''){
		$kwmurlDownload = $options['urlDownload'];
	}

	if(in_array($kwmurlDownload, $arrayUrl) && is_numeric(end($arrayUrl)) == 1){
		
		if(is_numeric(end($arrayUrl)) == 1){
			//o id da imagem
			$idImage = end($arrayUrl);
		}

		if ($idImage) {
			$urlTheImage = wp_get_attachment_metadata($idImage);

			if($urlTheImage == true){
				
				$urlArquivo =  ABSPATH.'wp-content/uploads/'.$urlTheImage['file'];
				
				if(is_file($urlArquivo)){
					
					$mime_types = array('.png'	=> 'image/png',
										'.jpe'	=> 'image/jpeg',
										'.jpeg' => 'image/jpeg',
										'.jpg'	=> 'image/jpeg',
										'.gif'	=> 'image/gif',
										'.bmp'	=> 'image/bmp',
										'.ico'	=> 'image/vnd.microsoft.icon',
										'.tiff' => 'image/tiff',
										'.tif'	=> 'image/tiff',
										'.svg'	=> 'image/svg+xml',
										'.svgz' => 'image/svg+xml');
					
					$extension = strrchr(basename($urlArquivo), "." );
					$type = 'image/jpeg';
					if(isset($mime_types[$extension]))
					{
						$type = $mime_types[$extension];
						header("Content-type: $type",true,200);
					    header("Content-Disposition: attachment; filename=".basename($urlArquivo));
					    header("Pragma: no-cache");
					    header("Expires: 0");
					    readfile($urlArquivo);
					}
				}else{
					exit();
				}
	    	}else{
	    		global $wp_query;
			    $wp_query->set_404();
			    status_header(404);
	    	}
	  	}
  	}
}

?>