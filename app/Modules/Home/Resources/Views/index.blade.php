@extends('kreston::home')
@section('home-banner')
	<div class="slider progressive-slider load">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="pgwSlider">
						@foreach($home_banners as $key => $row)
							<li><img src="{!! url($row->storage_location) !!}" alt="{!! $row->name !!}" data-description="{!! $row->description !!}"></li>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('latest-post')
	<div class="slider progressive-slider load">
	
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="box_style_1">
                    <div><span style="font-size:24px;font-weight:500">Article</span><span class="pull-right"><a href="http://iapi.or.id/category/69-1-Berita">Lihat Semua <i class="icon-right-dir"></i></a></span></div>
                    <hr>
                    <ul class="list_1">
                    
                          <li><a href="http://iapi.or.id/detail/169-Bea-Cukai-dan-IAPI-Edukasi-Akuntan-Publik"><i class="fa fa-caret-right"></i> Bea Cukai dan IAPI Edukasi Akuntan Publik</a></li>
                   
                          <li><a href="http://iapi.or.id/detail/168-UNIKAMA-Siap-Uji-Sertifikasi-Akuntan-Publik"><i class="fa fa-caret-right"></i> UNIKAMA Siap Uji Sertifikasi Akuntan Publik</a></li>
                   
                          <li><a href="http://iapi.or.id/detail/166-Materi-PPL-IKNB-8-September-2016"><i class="fa fa-caret-right"></i> Materi PPL IKNB 8 September 2016</a></li>
                   
                          <li><a href="http://iapi.or.id/detail/164-PPL-Khusus-Staf-1-Agustus-2016-UPDATE-EXPOSURE-DRAFT-SPAP"><i class="fa fa-caret-right"></i> PPL Khusus Staf 1 Agustus 2016 - UPDATE EXPOSURE DRAFT…</a></li>
                   
                          <li><a href="http://iapi.or.id/detail/162-Audit-Debitur-LPDB-KUMKM"><i class="fa fa-caret-right"></i> Audit Debitur LPDB KUMKM</a></li>
                   
                         <li><a href="http://iapi.or.id/detail/154-IAPI-Mengadakan-Buka-Puasa-Bersama-Ketua-BPK-RI"><i class="fa fa-caret-right"></i> IAPI Mengadakan Buka Puasa Bersama Ketua BPK RI</a></li>
                                     
                       <li><a href="http://iapi.or.id/detail/157-UU-Nomor-11-Tahun-2016-Tentang-Pengampunan-Pajak"><i class="fa fa-caret-right"></i> UU Nomor 11 Tahun 2016 Tentang Pengampunan Pajak</a></li>
                   
                          <li><a href="http://iapi.or.id/detail/156-Paparan-Mengenai-Tax-Amnesty"><i class="fa fa-caret-right"></i> Paparan Mengenai Tax Amnesty</a></li>
                   
                         
           </div>
			</div>
			
			<div class="col-md-6">
				<div class="box_style_1">
                    <div><span style="font-size:24px;font-weight:500"> News</span><span class="pull-right"><a href="http://iapi.or.id/category/69-1-Berita">See all <i class="icon-right-dir"></i></a></span></div>
                    <hr>
                    <ul class="list_1">
						@foreach($latest_news as $key => $news)
							<li><a href="{!! url('post/read/') !!}"><i class="fa fa-caret-right"></i> {!! $news->title !!}</a></li>
						@endforeach
                    </ul>
                     
           </div>
			</div>
		</div>
	</div>
</div>
@endsection


