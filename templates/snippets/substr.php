<?php 
/**
 *  Kürzt den Text, wenn er länger als 80 Zeichen lang ist.
 *  Beim Kürzen werden keine Wörter 'zerschnitten'
 */
 
//Der Import muss nur einmal im Template erfolgen
$this->import('String');

$this->text = strip_tags($this->text);
if (strlen ( $this->text )>= 80) {
	$this->text = $this->String->substr($this->text, 75);
};
echo '<p class="teaser">'.$this->text.'</p>';
?>