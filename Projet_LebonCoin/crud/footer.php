<!-- page footer pour eviter les longs copier coller repété-->

<footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <span class="text-muted" style="font-family: Georgia, serif">Copyright2023.</span>
  </div>
  <i class="fa-solid fa-turn-down-left"></i>
</footer>
<!--script modification de la datatable(table de donnée)-->
<script type="text/javascript">
  $(document).ready(function() {
    $("#datatable").dataTable({
      "oLanguage": {
        "sSearch": "Rechercher:",
        "sInfo": "Total d\'enregistrements (_END_ / _TOTAL_)",
        "oPaginate": {
          "sNext": "Suivant",
          "sPrevious": "Précédent"
        }
      }
    })
  });
</script>

<script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>

</html>