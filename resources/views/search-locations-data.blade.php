<div class="row isotope-wrapper masonry-layout c-gutter-30 c-mb-30" >
@foreach($Selocations as $i)

        <div class="col-xl-3 col-sm-6">
            <div class="vertical-item item-gallery content-absolute text-center ds">
                <a href="{{ asset('personal-modal-page/'.$i->ID) }}" class="item-media h-100 w-100 d-block">

                    <img src="{{ asset('images/gallery/'.$i->Image) }}" alt="img">
                    <div class="media-links"></div>
                </a>
                <div class="item-content">
                    <div class="item-title">
                        <div class="title">{{$i->location_nameEN}}</div>
                    </div>
                    <ul class="model-data">
                        <li>
                            <span class="title">area</span>
                            <span class="data">{{$i->area}}</span>
                        </li>
                        <li>
                            <span class="title">Type</span>
                            <span class="data">{{$i->location_type}}</span>
                        </li>
                        <li>
                            <span class="title">Gov</span>
                            <span class="data">{{$i->governorates->governorate_name_en}}</span>
                        </li>
                        <li>
                            <span class="title">City</span>
                            <span class="data">{{$i->city->city_name_en}}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
@endforeach
</div>

