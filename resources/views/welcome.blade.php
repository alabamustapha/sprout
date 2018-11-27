@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('footer_scripts')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>


    let url = "https://api.grid-nigeria.org/"

    const getDatasets = (resource_name, size = 200, page = 1, sort_by = "global_id", fields = "", cql = "") => {
        const endpoint = `${url}${resource_name}`
        axios.get(endpoint, {
            params: {
                size: size,
                page: page,
                sort_by: sort_by,
                fields: fields,
                cql: cql,
                crossdomain: true
            }
        }).then(response => {
            console.log(response.data)
            return response.data
        })
    }

    let resource_name = "schools" // Name of endpoint
    let size = 200 // Number of items to return
    let page = 1 // Page Number to return
    let sort_by = "lga_name" // Field used in sorting responses
    let fields = "lga_name,state_name,ward_name" // Comma-separated list of fields (No space)
    let cql = "state_name IN ('Kaduna', 'Kano')" // Read documentations about Querying/Filtering (CQL)

    let response = getDatasets(resource_name=resource_name, size=size, cql=cql) // You can optionally pass other parameters as defined above

    console.log(response)

</script>

@endsection