<script>
function toggleInput() {
  var input = document.getElementById("input");
  input.disabled = !input.disabled;
}
</script>

<script>
$( ".lock" ).click(function() {
$(this).toggleClass('unlocked')
});
</script>