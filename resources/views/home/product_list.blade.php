@extends('home.master')

@section("title")
    لیست محصولات
@stop
@section("content")

<section class="resume-section" >
    <div class="resume-section-content">
        <h3>
            لیست محصولات
        </h3>
        <div class="mt-5">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ردیف</th>
                    <th>عکس محصول</th>
                    <th>عنوان</th>
                    <th>تاریخ ثبت</th>
                    <th>ویرایش</th>
                </tr>
                </thead>
                <tbody>
                <tbody>
                @foreach($products as $key=>$item)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>
                            <img src="{{ url("/storage/upload/")."/". $item->image }}" style="width: 100px;" alt="">
                        </td>
                        <td>{{ $item->per_title }}</td>
                        <td>{{ $helper->latin2shamsi($item->created_at)  }}</td>
                        <td><a href="{{ route("product_edit",[$item->id]) }}" class="btn btn-warning">ویرایش</a></td>
                    </tr>
                @endforeach
                </tbody>

                </tbody>
            </table>
            <nav aria-label="Page navigation right">
                <ul class="pagination">
                    @if ($currentpage!=1)
                        <li class="page-item"><a class="page-link" href="{{ route("product_list",[$currentpage-1]) }}"> قبلی</a></li>
                    @endif
                    @for ($j = 1; $j <= $pagecount; $j++)
                        <li class="page-item"><a class="page-link" href="{{ route("product_list",[$j]) }}">{{ $j }}</a></li>
                    @endfor
                        @if ($currentpage!=$pagecount)
                            <li class="page-item"><a class="page-link" href="{{ route("product_list",[$currentpage+1]) }}"> بعدی</a></li>
                        @endif

                </ul>
            </nav>
        </div>

    </div>

</section>
@stop
