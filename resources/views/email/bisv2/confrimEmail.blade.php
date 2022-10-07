
<div style="margin: auto; width: 80%; padding: 10px">
  <div>
    <img src="{{ url('image/Logo-Urban-Athletes.png') }}" alt="UA" sizes="50px" style="margin-left: auto; margin-right: auto;">
  </div>
  <div>
    <h2>Hallo {{$dataEmail->nama}}</h2>
    {{-- <p>Pesanan Anda telah kami terima dan dalam beberapa saat lagi akan segera kami proses.</p> --}}
    <p>Kami hanya ingin mengkonfirmasi bahwa ini adalah email anda</p>
    <p>Berikut rincian pesanan Anda :</p>
    <table style="width: 100%; line-height: 2">
      <tr>
        <td>Kode Pembayaran</td>
        <td>: {{$dataEmail->kode}}</td>
      </tr>
      <tr>
        <td>Total Bayar</td>
        <td>: Rp {{number_format($dataEmail->harga,2,',','.')}}</td>
      </tr>
      <tr>
        <td>Promo Yang di Pilih</td>
        <td>{{$dataEmail->promo}}</td>
        {{-- @foreach ( $clubs as $club )
          @if ($club['id'] == $dataEmail->club_id)
            <td>: {{$club['name']}}</td>
          @endif
        @endforeach --}}
      </tr>
    </table>
    <p>Silahkan Silahkan klik tombol di bawah ini untuk melanjutkan pembayaran</p>

    <div style="text-align: center">
      <a href="{{ $dataEmail->url }}" target="_blank"
        style="
          text-decoration: none; font-weight: bold;
          display:inline-block;border-radius:20px;background-color:#33ff00;color:#fff;
          font-family:San,'Open Sans',Helvetica,Arial,sans-serif;font-size: 1rem;font-weight:500;margin:16px 0 0;box-sizing:border-box;padding: 0.3rem 2.5rem;
        ">
        Lanjut ke pembayaran
      </a>
      <p>Alternative Link :</p>
      <a target="_blank"
        href="{{ $dataEmail->url }}">
        {{ $dataEmail->url }}
      </a>
    </div>
    <p>Jangan menginformasikan bukti atau data pembayaran kepada pihak manapun kecuali Urban Athletes.</p>
  </div>
</div>