 @extends('partials.admin')

<style>
.container{
    display: flex;
}
.content {
    width: 90%;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    float: right;
}
*{
        list-style: none;
    }

    .nav_bt:onhover{
        cursor: pointer;
        opacity: 1;
    }

    .admin-info {
        display: flex;
        justify-content: space-around;
        margin-top: 20px;
        float: right;
        height: fit-content;
        padding: 5px;
        border: 1px solid #ccc;
    }

    a{
    text-decoration: none;
    color: inherit;
    }
    .admin-nav{
        width: 10%;
        float: left;
        height: 80vh;
        background-color: #f8f9fa;
        border: 0 2px solid rgb(53, 54, 54);
        padding: 20px;
        
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .nav_messages{
        color:rgb(43, 145, 158);
        font-size: 18px;
        font-weight: 500;
        transition: .5s;
    }
    ul{
        display: flex;
        flex-direction: column;
    }
    .no-data {
        text-align: center;
        padding: 20px;
        color: #666;
    }
    
    .table-container {
        overflow-x: auto;
    }
    
    th {
        cursor: pointer;
    }
    table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 80%;
  justify-self: center;
}

th, td {
  padding: 15px;
}
    
</style>

@section('title', 'Portfolio Website | Received Messages')

@section('content')
    <div class="content">
        <h1>Messages Received:</h1>
        <div class="contact-container">
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($contacts as $contact)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->message, 100 }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="no-data">No messages found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            @if($contacts->hasPages())
                <div class="pagination">
                    {{ $contacts->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection


          
            
            
                

   
