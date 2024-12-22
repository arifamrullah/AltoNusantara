<?php
/**
 * Template Name: Kontak
 */

  get_header();
?>

<section id="contact" class="bg-overlay overlay-blue">
  <div class="container">
    <div class="row top-offset-130">
      <div class="pull-left w33">
        <h1 style="text-decoration:overline">Kontak Kami</h1>
        <!-- <hr class="divider"> -->
        <br><br>
        <p>Rusunawa Tambora I</p>
        <p>Tower B Lt. 10 / 4</p>
        <p>Jakarta Barat, 11330</p>
        <br>
        <p>Jl. Pembangunan II</p>
        <p>No. 65A/116</p>
        <p>Cikudapateuh Kolot-Gatsu</p>
        <p>Bandung, 40273</p>
        <br>
        <a href="mailto:aling0807@gmail.com">aling0807@gmail.com</a>
      </div>
      <div class="pull-right w66">
        <form class="form-contact">
          <input type="text" name="fullname" placeholder="Nama Lengkap">
          <input type="text" name="email" placeholder="Email">
          <select name="subject">
            <option value="">--Pilih Topik--</option>
            <option value="booking">Tour Booking</option>
            <option value="asking">Ajukan Pertanyaan</option>
            <option value="other">Lain-lain</option>
          </select>
          <textarea name="message" placeholder="Pesan"></textarea>
          <input type="submit" value="send">
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>