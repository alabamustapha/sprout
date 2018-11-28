@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
       <div class="col-md-12 mb-3">
            <form>
                <div class="form-row">
                    <div class="col-7">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="State" value="Kaduna" disabled>
                    </div>
                    <div class="col">
                        <select name="lga_name" id="lga_name" class="form-control">
                            <option value="">All</option>
                            <option value="Birnin Gwari">Birnin Gwari</option>
                            <option value="Chikun">Chikun</option>
                            <option value="Giwa">Giwa</option>
                            <option value="Igabi">Igabi</option>
                            <option value ="Ikara">Ikara</option>
                            <option value ="Jaba">Jaba</option>
                            <option value ="Jema’A">Jema’a</option>
                            <option value ="Kachia">Kachia</option>
                            <option value ="Kaduna North">Kaduna North</option>
                            <option value ="Kaduna South">Kaduna South</option>
                            <option value ="Kagarko">Kagarko</option>
                            <option value ="Kajuru">Kajuru</option>
                            <option value ="Kaura">Kaura</option>
                            <option value ="Kauru">Kauru</option>
                            <option value ="Kubau">Kubau</option>
                            <option value ="Kudan">Kudan</option>
                            <option value ="Lere">Lere</option>
                            <option value ="Makarfi">Makarfi</option>
                            <option value ="Sabon Gari">Sabon Gari</option>
                            <option value ="Sanga">Sanga</option>
                            <option value ="Soba">Soba</option>
                            <option value ="Zangon Kataf">Zangon Kataf</option>
                            <option value ="Zaria">Zaria</option>
                        </select>
                    </div>
                </div>
            </form>
       </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12" id="facilities">
            
        </div>
    </div>
    
    <div class="row justify-content-center">
        <button class="btn btn-lg btn-primary" id="load-more" data-url="">Load more</button>
    </div>

    
</div>
@endsection



@section('footer_scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
<script>

    
    axios.get('/api/features')
    .then((res)=>{
        console.log(res.data)

          let resource = '<div class="card-deck mb-5">'
        
            res.data.forEach(feature => {
                resource += `<div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">${feature.name}</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                            </div>`
            });

        resource += '</div>'
        

        $('#facilities').append(resource)

        $('#load-more').attr('data-url', response.data.pager.next);
        
    });

    

    // const getDatasets = (url) => {
        
    //     axios.get(url).then(response => {
            
    //         console.log(response)
    //         features = response.data.features
            
    //           
    //     })
    // }
 
    // let response = getDatasets(url) // You can optionally pass other parameters as defined above

    // console.log(response)


    // $(document).ready(function(){
    //     $("#load-more").click(function(event){
    //         event.preventDefault()
    //         alert("clicked")
    //         let response = getDatasets($(this).data('url')) // You can optionally pass other parameters as defined above
    //     })    
        
    //     $("[name='lga_name']").change(function(event){
    //         let lga_name = $(this).val()
    //         url = "https://api.grid-nigeria.org/health-facilities/?size=4&cql=state_name IN ('Kaduna') and lga_name = '" + lga_name + "'"
    //         $('#facilities').empty()
            
    //         getDatasets(url) // You can optionally pass other parameters as defined above
            
    //     })    
    // })
    

</script>

@endsection