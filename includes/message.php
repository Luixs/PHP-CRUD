<?php
//Sessão
session_start();
if(isset($_SESSION['msg'])){
?>
<script>
    window.onload = function() {
        M.toast({html: '<?php echo $_SESSION['msg'];?>'});
    }
</script>
<?php    
}
session_unset();
?>