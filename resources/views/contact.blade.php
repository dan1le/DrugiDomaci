@extends("layout")
@section("titl")
Contact Page
@endsection
@section("sadrzajStranice")
<br><form>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Enter subject" name="subject">
    </div>
  </div><br>
  <textarea class="form-control" placeholder="Write a message" rows="5" id="message" name="text"></textarea><br>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form><br>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22911.02169470018!2d19.97149285!3d44.127144449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4759e789109e2cb7%3A0xdf5fa63cc7974e7b!2z0KbRgNC90LAg0KDQtdC60LA!5e0!3m2!1ssr!2srs!4v1705354830809!5m2!1ssr!2srs" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br>
@endsection