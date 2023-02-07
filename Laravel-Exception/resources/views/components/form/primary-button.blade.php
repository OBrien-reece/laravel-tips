<button {{ $attributes->merge([
  'class' => 'btn btn-success btn-block',
  'type' => 'submit'
]) }}>

    {{ $slot }}

</button>


