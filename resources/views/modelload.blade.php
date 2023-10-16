
<div class="row isotope-wrapper masonry-layout c-gutter-30 c-mb-30" >
    @foreach($AllModels as $i)
    <div class="col-xl-3 col-sm-6 {{$i->eyecolor->ColorEN}}">
        <div class="vertical-item item-gallery content-absolute text-center ds">
            <a href="{{ asset('personal-modal-page/'.$i->ID) }}" class="item-media h-100 w-100 d-block">

                <img src="{{ asset('images/gallery/'.$i->Image) }}" alt="img">
                <div class="media-links"></div>
            </a>
            <div class="item-content">
                <div class="item-title">
                    <div class="title">{{$i->FirstNameEN}}</div>
                    <div class="subtitle">{{$i->LastNameEN}}</div>
                </div>
                <ul class="model-data">
                    <li>
                        <span class="title">height</span>
                        <span class="data">{{$i->Height}}</span>
                    </li>
                    <li>
                        <span class="title">weight</span>
                        <span class="data">{{$i->Weight}}</span>
                    </li>
                    <li>
                        <span class="title">age</span>
                        <span class="data">{{ \Carbon\Carbon::parse($i->BirthDate)->diff(\Carbon\Carbon::now())->format('%y') }}</span>
                    </li>
                    <li>
                        <span class="title">eyes</span>
                        <span class="data">{{$i->eyecolor->ColorEN}}</span>
                    </li>
                    <li>
                        <span class="title">hair</span>
                        <span class="data">{{$i->hairquality->HairQualityEN}}</span>
                    </li>
                    <li>
                        <span class="title">hair Color</span>
                        <span class="data">{{$i->haircolor->HairColorEN}}</span>
                    </li>
                    <li>
                        <span class="title">Gov</span>
                        <span class="data">{{$i->governorates->governorate_name_en}}</span>
                    </li>
                    <li>
                        <span class="title">City</span>
                        <span class="data">{{$i->city->city_name_en}}</span>
                    </li>
                    <li>
                        <span class="title">Talent</span>
                        <span class="data">{{$i->talent->TalentNameEN }}</span>
                    </li>
                    <li>
                        <span class="title">Gender</span>
                        <span class="data">{{$i->gender->GenderEN }}</span>
                    </li>
                    <li style="width: 31%">
                        <span class="title" >Skin Color</span>
                        <span class="data">{{$i->skincolor->SkinColorEN }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>
