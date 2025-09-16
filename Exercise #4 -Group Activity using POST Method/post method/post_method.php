<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QUADRO</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
    
        body {
        min-height: 100vh;
        margin: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start; 
        background: linear-gradient(to bottom, #36a2eb 0%, #d6eaff 100%);
}
        .search-form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px auto;
            gap: 10px;
            max-width: 500px;
        }

        .search-form input[type="text"] {
            flex: 1;
            padding: 12px 15px;
            border: 2px solid #ccc;
            border-radius: 25px;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }

        .search-form input[type="text"]:focus {
            border-color: #007BFF;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.4);
        }

        .search-form button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 25px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .search-form button:hover {
            background-color: #0056b3;
        }

        .search-form button i {
            font-size: 16px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
}
        .container p {
            text-align: center;
            font-size: 18px;
            margin-top: 20px;
            color: #555;
        }
        

        /* Profile box centered */
        .member {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            max-width: 400px;
            margin: 30px auto; /* This centers it */
            padding: 20px;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            text-align: center;
            
        }

        .member img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid #007BFF;
        }

        .member-info h2 {
            margin: 10px 0 5px;
        }

        .member-info p {
            margin: 0 0 15px;
            font-size: 16px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-links a {
            color: #007BFF;
            font-size: 20px;
            transition: 0.3s;
        }

        .social-links a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

    <h1 style="text-align:center;">QUADRO</h1>

    <!-- Professional Search Bar -->
    <form method="post" action="" class="search-form">
        <input type="text" name="member" id="member" placeholder="Search member... (e.g. Julie)">
        <button type="submit"><i class="fa fa-search"></i> Search</button>
    </form>


        <?php

        // Members data (keys are lowercase)
        
        
$francis = [
    "name" => "Francis Angeles",
    "age" => 20,
    "img" => "Francis Angeles.jpg",
    "email" => "angelesfrancis_bsit@plmun.edu.ph",
    "github" => "https://github.com/francisangeles",
    "phone" => "+639604449220",
    "facebook" => "https://www.facebook.com/fkbjt"
];
$lysa = [
    "name" => "Lysa Guita",
    "age" => 20,
    "img" => "Lysa Guita.jpg",
    "email" => "guitalysa_bsit@plmun.edu.ph",
    "github" => "https://github.com/cm-lysaa",
    "phone" => "+639551422713",
    "facebook" => "https://www.facebook.com/cz.yslaa"
];
$clarice = [
    "name" => "Clarice Joyce Phodaca",
    "age" => 20,
    "img" => "Clarice Joyce Lumanglas Phodaca.jpg",
    "email" => "phodacaclaricejoycelumanglas_bsit@plmun.edu.ph",
    "github" => "https://github.com/phodacaclaricejoycelumanglasbsit-arch",
    "phone" => "+639387973599",
    "facebook" => "https://www.facebook.com/claricejoycelumanglas.phodaca"
];
$julie = [
    "name" => "Julie Rhose Ferreras",
    "age" => 20,
    "img" => "Julie Rhose Ferreras.jpg",
    "email" => "ferrerasjulierhose_bsit@plmun.edu.ph",
    "github" => "https://github.com/ferrerasjulierhose-cell",
    "phone" => "+639388711055",
    "facebook" => "https://www.facebook.com/julierhose.ferreras.1"
];

$members = [
    
    "francis" => $francis,
    "angeles" => $francis,
    "francis angeles" => $francis,
    "angeles francis" => $francis,
    
    "lysa" => $lysa,
    "guita" => $lysa,
    "lysa guita" => $lysa,
    "guita lysa" => $lysa,
    
    "clarice" => $clarice,
    "joyce" => $clarice,
    "phodaca" => $clarice,
    "clarice joyce phodaca" => $clarice,
    "joyce clarice phodaca" => $clarice,
    
    "julie" => $julie,
    "rhose" => $julie,
    "ferreras" => $julie,
    "julie rhose ferreras" => $julie,
    "ferreras julie" => $julie
];


        // Check if searched
        if (isset($_POST['member']) && trim($_POST['member']) !== '') {
            $search = strtolower(trim($_POST['member'])); // case-insensitive
            if (array_key_exists($search, $members)) {
                $m = $members[$search];
                echo "
                <div class='member'>
                    <img src='{$m['img']}' alt='{$m['name']}'>
                    <div class='member-info'>
                        <h2>{$m['name']}</h2>
                        <p>{$m['age']} years old</p>
                        <div class='social-links'>
                            <a href='https://mail.google.com/mail/?view=cm&to={$m['email']}' target='_blank'><i class='fa-solid fa-envelope'></i></a>
                            <a href='{$m['github']}' target='_blank'><i class='fa-brands fa-github'></i></a>
                            <a href='tel:{$m['phone']}'><i class='fa-solid fa-phone'></i></a>
                            <a href='{$m['facebook']}' target='_blank'><i class='fa-brands fa-facebook-f'></i></a>
                        </div>
                    </div>
                </div>
                ";
            } else {
                echo '<div class="container"><p>No member found with that name.</p></div>';
            }
        } else {
            echo '<div class="container"><p>Please search for a member above.</p></div>';
        }
        
        
        ?>
    

</body>
</html>
