<!DOCTYPE html>
<html>

@include('layouts.head')

<body>
<?php
if ($template == 'layouts.template-home') {
    ?>
	@include($template)
	<?php
} else {
    ?>
	@include('layouts.header')
	@include($template)
	@include('layouts.footer')
	<?php
}
?>
</body>
</html>
