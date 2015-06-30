﻿=== KWM Force Download ===
Contributors: Kelvin-mariano
Tags: force download, download, forçar o download, force download image, force download img, forçar o download de imagem, download de imagem, image download, kwm, plugin de forçar download, plugin force download, automatic download image, download automatico
Requires at least: 3.9.1
Tested up to: 4.2.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Force download images in a simple and easy.

== Description ==

Plugin to force downloading easy and simple way to images, with custom url eg downloads: meusite.com/downloads/id-da-imagem.

Plugin para forçar o download de imagens de modo fácil e simples, com url de downloads personalizadas ex: meusite.com/downloads/id-da-imagem

== Installation ==

1. Upload `kwm-force-download` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Click the KWM Force Download menu and set the example images download slug: downloads
4. Place the class at kwm-force-donwload from the tag <a> and attribute data-forcedownload
5. The attribute data-forcedownload must contain the image ID
6. Exemple: `<a href="#" class="kwm-force-donwload" data-forcedownload="150">Imagem</a>`
7. you should use different default permalinks. use eg meusite.com.br/category/post_type

== Screenshots ==

1. In wordpress editor insert an image
2. Click the Text tab look for the img tag corresponding to image
3. If he is not tagged <a> involving the image tag add the tag with the class "kwm-force-donwload" and the attribute data-forcedownload="150"
4. Example: <a href="#" class="kwm-force-donwload" data-forcedownload="150"><img src="#" /></a>
5. In attribute data-forcedownload="150" use the id of the image to get just see the image below

== Changelog ==

= 1.0 =
* Launch of the plugin