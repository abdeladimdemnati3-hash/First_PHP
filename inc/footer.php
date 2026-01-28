<footer class="text-center p-3">
  © <?php echo date("Y"); ?> MySite. All rights reserved.
  <br>
  <a href="#">Privacy Policy</a> | <a href="#">Contact</a>
</footer>

<style>
  footer {
  background: #222;
  color: #ddd;
  font-size: 14px;
}
footer a {
  color: #bbb;
  text-decoration: none;
  margin: 0 10px;
}
footer a:hover {
  color: #fff;
  text-decoration: underline;
}

</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src ="assets/js/bootstrap.min.js"></script>


<script>
  $(document).ready(function(){
    $("#testBtn").click(function(){
      alert("jQuery is working with PHP!");
    });
  });
</script>

</body>
</html>
