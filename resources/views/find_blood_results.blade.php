<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Blood Results</title>
    <!-- Include your CSS files here -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap">


    <style>

body {
    font-family: 'Poppins', sans-serif;
}

/* Section styling */
#findbloodresults {
    padding: 60px 0;
    background-color: #e2f3f5;
    display: flex;
    justify-content: center; /* Horizontally center */
    align-items: center;     /* Vertically center */
}

.container {
    display: flex;
    flex-direction: column; /* Ensure content stacks vertically */
    align-items: center;    /* Center horizontally */
    width: 100%;            /* Full width to ensure centering works */
}

.table {
    padding: 50px;
    margin-top: 20px;
    border-radius: 0.3rem;
    overflow: hidden;
    width: 100%;
    table-layout: fixed;
}

/* Section title centering */
.section-title {
    margin-bottom: 30px;
    text-align: center; /* Center text in title */
}

/* Table styling */
.table thead {
    background-color: #007bff; /* Primary color */
    color: #fff;
}

.table tbody tr {
    background-color: #ffffff;
}

.table tbody tr:nth-child(even) {
    background-color: #f7f9fc; /* Light grey */
}

.table tbody tr:hover {
    background-color: #e9ecef; /* Lightest grey */
}

.table th, .table td {
    text-align: center;
    vertical-align: middle;
    padding: 15px;
    font-size: 12px;
    color: black;
}

.table th {
    text-transform: uppercase;
    font-weight: 500;
}

.table td {
    font-weight: 300;
}

/* Custom scrollbar for webkit browsers */
::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
}

    </style>
</head>
<body>

    <header>
        <!-- Your header content -->
    </header>

    <main>
   
    <section id="findbloodresults" style="padding: 60px 0; background-color: #e2f3f5;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="section-title text-center mb-4">
                    <h2 style="font-size: 2.8rem; font-weight: bold; color: #007bff;">Find Blood Result</h2>
                    <p style="font-size: 1.2rem; color: #495057;">Showing results for <strong style="color: #007bff;">{{ $bloodType }}</strong> blood type in <strong style="color: #007bff;">{{ $location }}</strong>.</p>
                </div>
            </div>

            @if($donations->isEmpty())
                <div class="col-md-12 col-sm-12">
                    <div class="alert alert-danger text-center" role="alert" style="font-size: 1.2rem; padding: 20px;">
                        <strong>Oops!</strong> No donors found...
                    </div>
                </div>
            @else
                <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-primary">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No</th>
                                    <th>Blood Type</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($donations as $donation)
                                    <tr>
                                        <td>{{ $donation->name }}</td>
                                        <td>{{ $donation->email }}</td>
                                        <td>{{ $donation->mobile }}</td>
                                        <td>{{ $donation->blood_type }}</td>
                                        <td>{{ $donation->location }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
</section>

    </main>

    <footer>
        <!-- Your footer content -->
    </footer>

    <!-- Include your JS files here -->
</body>
</html>
