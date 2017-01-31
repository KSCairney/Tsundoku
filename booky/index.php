<html>
    <head>
		<title>Recommendations</title>
        <script>
        $ cd ~/public_html
        $ php -S localhost:8000
</script>
	</head>
	<body>
      <p>
        <?php
          function books() {
              echo "would you like to read a book?";
          };
          books();
        ?>
      </p>
    </body>
</html>