<?php include 'sidebar.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="sebuah CV yang awalnya berkembang dari tugas sekolah" />
    <meta
      name="keywords"
      content="Prayer MG Terok, CV, Alphachannel, Unklab"
    />
    <meta name="author" content="Prayer MG Terok" />
    <title>CV</title>
    <link rel="stylesheet" href="style/style.css">
  </head>
  <body>
  <section id="contact">
      <div class="box">
      <hr />
      <h1>Contact Me</h1>
      <form>
        <label for="name">Your Name: </label>
        <input type="text" name="name" id="name" required />
        <label for="email">Your Email :</label>
        <input type="email" name="email" id="email" required />
        <label for="message">Your Message:</label>
        <textarea
          name="message"
          id="message"
          style="height: 270px;"
        ></textarea>
        <br /><br />
        <input type="submit" name="submit" />
      </form>
      </div>
    </section>
    <footer></footer>
  </body>
</html>
