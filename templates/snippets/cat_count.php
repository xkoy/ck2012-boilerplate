<?php 
/**
 * Zählt die Elemente und Gruppiert die Elemente zu Zeileen a 4 Items.
 * Die ersten Items jeder Zeile erhalten die Klasse 'first', die letzen Elemente die Klasse 'last' 
 * Elemente in der ersten Zeile erhalten die Klasse 'Top', Elemente aus der letzen Zeile die KLappse 'bottom'
 */
	$i = 0;
	$lE = (count($this->entries)%4 ==0) ? 4 : (count($this->entries)%4);

foreach ($this->entries as $entry): ?>
<li class="item<?php echo ' itemid_'.$entry['id']; 
					echo ($i%2 == 0) ? ' even' : ' odd'; 
					echo ($i%4 == 0) ? ' first' : ''; 
					echo ($i%4 == 3) ? ' last' : ''; 
					echo ($i<= 3) ? ' top' : '';
					echo ($i >= (count($this->entries)-$lE)) ? ' bottom' : '';?>">
<?php $i++; ?>
<...>
</li>
<?php endforeach; ?>                    
?>