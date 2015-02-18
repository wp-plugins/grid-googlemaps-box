<?php 
/**
 * GMaps Template
 */
?>

<div class="box<?php echo ($this->style)? " ".$this->style." ": " "; echo implode($this->classes," ")?>">
    <div class="the-map" id="map-<?php echo $this->boxid; ?>" 
    data-long="<?php echo $content->coordinates->lng; ?>" data-lat="<?php echo $content->coordinates->lat; ?>"></div>
</div>
