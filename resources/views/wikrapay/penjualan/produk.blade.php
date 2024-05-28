<div class="modal fade" id="kt_modal_1" tabindex="-1" role="dialog" aria-labelledby="modal-produk-label">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pilih Barang</h4>
            </div>
            <div class="modal-body">
                <table class="table table-striped table-bordered table-produk">
                    <thead>
                        <th width="5%">No</th>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Harga Beli</th>
                        <th><i class="fa fa-cog"></i></th>
                    </thead>
                    <tbody>
                        @foreach ($penjualan as $key => $item)
                            <tr>
                                <td width="5%">{{ $key+1 }}</td>
                                <td>
                                    @if($item->penjualan)
                                        <span class="label label-success">{{ $item->penjualan->nama_barang }}</span>
                                    @else
                                        Pemasok tidak ditemukan
                                    @endif
                                </td>
                                <td>
                                    @if ($item->penjualan)
                                        {{ $item->penjualan->harga }}
                                    @else
                                        Harga tidak di temukan
                                    @endif
                                </td>
                                <td>
                                    @if ($item->penjualan)      
                                    <a href="#" class="btn btn-primary btn-xs btn-flat"
                                        onclick="pilihProduk('{{ $item->penjualan->id }}', '{{ $item->barang_id }}')">
                                        <i class="fa fa-check-circle"></i>
                                        Pilih
                                    </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>