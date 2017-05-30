<?php
$num = 20;
 ?>
{{ "Estrutura Condicional" }}
 @if ($num < 20)
   <p>Número é menor que vinte</p>
 @elseif ($num == 20)
   <p>Número é igual a vinte</p>
 @else
   <p>Número é maior que vinte</p>
 @endif

 {{ "Estrutura de Repetição"}}
  {{ "For" }}
 @for ($i=0; $i < 20; $i++)
   <p>Valor: {{ $i }}</p>
 @endfor
 <?php
 $k = 0;
  ?>
{{ "While" }}
 @while ($k < 20)
   <p>Valor: {{ $k }}</p>
    <?php $k++; ?>
 @endwhile

{{ "ForEach" }}
<?php
$array = [1,2,3,4,5];
?>
@foreach ($array as $value)
  <p>Chave, {{ $loop->index }}, Valor: {{ $value }}</p>
@endforeach
<?php
$array = [];
?>
@forelse ($array as $value)
  <p>Chave, {{ $loop->index }}, Valor: {{ $value }}</p>
@empty
  <p>Nenhum elemento no array</p>
@endforelse
