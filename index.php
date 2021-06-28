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
    <header>
      <table cellspacing="20">
        <tr>
          <td>
            <img src="img/Ganteng.jpg" alt="profile-picture" width="200" id="pp"/>
          </td>
          <td>
            <h1>Prayer MG Terok</h1>
            <h2>Collage Student</h2>
            <p>
              Watutumou, Kalawat, North Minahasa Regency, North Sulawesi, Indonesia, 95378
              <br />
              Email: <em>s2200521@student.unklab.ac.id</em>
              <br />
              Phone: +62 856 9676 9836
            </p>
          </td>
        </tr>
      </table>
    </header>
    <nav>
      <a href="">Biography</a>
      <a href="#educations">| Educations</a>
      <a href="#employment">| Employement</a>
      <a href="#skills">| Skills</a>
      <a href="#contact-me">| Contact Me</a>
    </nav>
    
    <section id="educations">
      <hr />
      <h1>Educations</h1>
      <ol>
        <li>
          <p>
            <strong
              ><a href="http://www.unklab.ac.id/">Universitas Klabat</a></strong
            >
            Information Systems (Not graduate yet)
          </p>
        </li>
        <li>
          <p>
            <strong
              ><a href="https://http://www.prisma.sch.id/"
                >Manado Prisma School</a>
            </strong>
            <br />
            Computer Network Engineering major in Vocational High School
            <br />
            Advisor : Andrew Lengkong
          </p>
        </li>
      </ol>
    </section>
    <section id="employment">
      <hr />
      <h1>Employement</h1>
      <table cellspacing="20">
        <tr>
          <td>
            <strong>Department of Marketing , 
              Alphachannel Indonesia</strong> <br />
            Social Media Marketer
          </td>
          <td>
            Manado, Indonesia <br />
            2021 – Present
          </td>
        </tr>
        <tr>
          <td>
            <strong
              >Department of Multimedia , 
              Alphachannel Indonesia</strong
            >
            <br />
            Broadcaster and Videographer off the Field
          </td>
          <td>
            Manado, Indonesia <br />
            2019 – Present
          </td>
        </tr>
        <tr>
          <td>
            <strong>Department of Social Media Marketing, 
            Manado Prisma School</strong>
            <br />
            Content Creator
          </td>
          <td>
            Manado, Indonesia <br />
            2017 – 2020
          </td>
        </tr>
        <tr>
          <td>
            <strong>
              Red Wedding Event Organizer
            </strong>
            <br />
            Cameraman and Video Editor
          </td>
          <td>
            Manado Indonesia <br />
            2017 – 2018
          </td>
        </tr>
      </table>
    </section>
    <section id="skills">
      <hr />
      <h1>Skills</h1>
      <table cellspacing="20">
        <tr>
          <td>
            <table cellspacing="10">
              <tr>
                <td>A. Photshop</td>
                <td>⭐️⭐️⭐️⭐️⭐️</td>
              </tr>
              <tr>
                <td>A. Illustrator</td>
                <td>⭐️⭐️⭐️⭐️⭐️</td>
              </tr>
              <tr>
                <td>A. Premiere</td>
                <td>⭐️⭐️⭐️⭐️⭐️</td>
              </tr>
            </table>
          </td>
          <td>
            <table cellspacing="10">
              <tr>
                <td>Markerting</td>
                <td>⭐️⭐️⭐️⭐</td>
              </tr>
              <tr>
                <td>Photography</td>
                <td>⭐️⭐️⭐️</td>
              </tr>
              <tr>
                <td>C++</td>
                <td>⭐️⭐️⭐</td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </section>
    <section id="contact">
      <hr />
      <h1>Contact Me</h1>
      <form>
        <label for="name">Your Name: </label>
        <input type="text" name="name" id="name" required />
        <br />
        <br />
        <label for="email">Your Email :</label>
        <input type="email" name="email" id="email" required />
        <br />
        <br />
        <label for="message">Your Message:</label>
        <br />
        <textarea
          name="message"
          id="message"
          cols="40"
          rows="10"
          placeholder="type your message..."
        ></textarea>
        <br /><br />
        <input type="submit" name="submit" />
      </form>
    </section>
    <footer></footer>
  </body>
</html>
