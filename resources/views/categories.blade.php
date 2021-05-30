@extends('layout')
@section('content')
    



<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-4">Categories</h1>

</div>

<div class="container">
    <div class="row">
        <table class="table">
            <thead>
            <tr>
                <tr>
                    <th>company_id</th>
                    <th>company_name</th>
                    <th>company_web</th>
                    <th>company_address</th>
                    <th>company_phone</th>
                    <th>company_code</th>
                    <th>category_id</th>
                </tr>
            </tr>
            </thead>
            
            <tbody>
                @foreach($categories as $company)
                <tr>
                    <td>{!! $company->company_id !!}</td>
                    <td>{!! $company->company_name !!}</td>
                    <td>{!! $company->company_web !!}</td>
                    <td>{!! $company->company_address !!}</td>
                    <td>{!! $company->company_phone !!}</td>
                    <td>{!! $company->company_code !!}</td>
                    <td>{!! $company->category_id !!}</td>
                  
                </tr>
                @endforeach

            </tbody>
        </table>
        {!! $categories->links() !!}
    </div>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img class="mb-2" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
                <small class="d-block mb-3 text-muted">© 2017-2018</small>
            </div>
            <div class="col-6 col-md">
                <h5>Companies</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">List of companies</a></li>





                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Trainers</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">List of trainers
                        </a></li>



                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li><a class="text-muted" href="#">Team</a></li>



                </ul>
            </div>
        </div>
    </footer>
</div>





</body></html>
@endsection
@section('title','Categories')
