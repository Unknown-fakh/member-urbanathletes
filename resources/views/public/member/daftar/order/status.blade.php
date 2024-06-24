<x-main specialPage=true>
  <x-layout_card_form>
    <div class="px-4 py-4">
      <table class="table-auto w-full">
        <thead>
          <tr class="border-b">
            <th class="py-2 text-left">Order Kode : {{$status['order_id']}}</th>
            <th class="py-2"></th>
            <th class="py-2 text-right">Order : <span class="uppercase">{{$dataOrder->order_name}}</span></th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b">
            <td class="py-2">Nama</td>
            <td class="py-2">:</td>
            <td class="py-2">{{$dataOrder->nama}}</td>
          </tr>
          <tr class="border-b">
            <td class="py-2">Email</td>
            <td class="py-2">:</td>
            <td class="py-2">{{$dataOrder->email}}</td>
          </tr>
          <tr class="border-b">
            <td class="py-2">Total Pembayaran</td>
            <td class="py-2">:</td>
            <td class="py-2">Rp. {{$status['gross_amount']}}</td>
          </tr>
          <tr class="border-b">
            <td class="py-2">Status Pembayaran</td>
            <td class="py-2">:</td>
            <td class="py-2 ">
              @if ($status['transaction_status'] === 'settlement' || $status['transaction_status'] === 'deny')
                <span class="bg-green-400 rounded-md px-2">Telah Di Bayar</span>
              @elseif ($status['transaction_status'] === 'expire')
                <span class="bg-red-400 rounded-md px-2">{{$status['transaction_status']}}</span>
              @else
                <span class="bg-yellow-400 rounded-md px-2">{{$status['transaction_status']}}</span>
              @endif
            </td>
          </tr>
          <tr class="border-b">
            <td class="py-2">Tanggal Pembayaran</td>
            <td class="py-2">:</td>
            <td class="py-2">{{$status['transaction_time']}}</td>
          </tr>
        </tbody>
      </table>
      <div class="py-4">
        @if ($dataOrder->club_id == 2)
          <a href="https://wa.me/628179188880?text=Hallo%20Urban%20Athletes%0ASaya%20{{$dataOrder->nama}}%0ABerikut%20rincian%20pesanan%20Saya%20:%0A%0AKode%20Pembayaran%09:{{$status['order_id']}}%0ATotal%20Bayar%09:%20Rp%2099.000,00%0AClub%20%09:%20UA Merr%0AStatus Pembayaran%20%09:%20Telah Di Bayar" class="underline bg-yellow-400 rounded-md py-2 px-4"><i class="fa-solid fa-globe"></i> Kirim notifikasi ke whatsapp Urban Athletes</a>
        @elseif ($dataOrder->club_id == 4)
          <a href="https://wa.me/628179188880?text=Hallo%20Urban%20Athletes%0ASaya%20{{$dataOrder->nama}}%0ABerikut%20rincian%20pesanan%20Saya%20:%0A%0AKode%20Pembayaran%09:{{$status['order_id']}}%0ATotal%20Bayar%09:%20Rp%2099.000,00%0AClub%20%09:%20UA Tidar%0AStatus Pembayaran%20%09:%20Telah Di Bayar" class="underline bg-yellow-400 rounded-md py-2 px-4"><i class="fa-solid fa-globe"></i> Kirim notifikasi ke whatsapp Urban Athletes</a>
        @elseif ($dataOrder->club_id == 5)
          <a href="https://wa.me/628179188880?text=Hallo%20Urban%20Athletes%0ASaya%20{{$dataOrder->nama}}%0ABerikut%20rincian%20pesanan%20Saya%20:%0A%0AKode%20Pembayaran%09:{{$status['order_id']}}%0ATotal%20Bayar%09:%20Rp%2099.000,00%0AClub%20%09:%20UA Lenmarc%0AStatus Pembayaran%20%09:%20Telah Di Bayar" class="underline bg-yellow-400 rounded-md py-2 px-4"><i class="fa-solid fa-globe"></i> Kirim notifikasi ke whatsapp Urban Athletes</a>
        @endif
      </div>
    </div>
  </x-layout_card_form>
</x-main>