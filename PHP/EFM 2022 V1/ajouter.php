<!DOCTYPE html>
<html>
    <head>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-200">
    <div class="heading text-center font-bold text-3xl m-5 text-red-500">Ajouter un nouveau client</div>
    <div class="heading text-center text-l m-5 text-black-400">Veuillez remplir tous les champs</div>
<style>
  body {background:white !important;}
</style>
  
    <form action="traitement-ajouter.php" method="POST">
        <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-4 shadow-lg max-w-2xl">
            <div>
                <label for="nom"  class="mb-2 block text-base font-medium text-[#07074D]" > Nom </label>
                <input type="text" name="nom" id="nom" placeholder="Entrez votre nom" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div><br>
            <div>
                <label for="prenom"  class="mb-2 block text-base font-medium text-[#07074D]" > Prénom </label>
                <input type="text" name="prenom" id="prenom" placeholder="Entrez votre prenom" class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div><br>
            <div>
                <label for="cin"  class="mb-2 block text-base font-medium text-[#07074D]" > CIN </label>
                <input type="text" name="cin" id="cin" placeholder="Entrez votre CIN"  class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div><br>
            <div>
                <label for="email"  class="mb-2 block text-base font-medium text-[#07074D]" > Email </label>
                <input type="email" name="email" id="email" placeholder="Entrez votre Email"  class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div><br>
            <div>
                <label for="password"  class="mb-2 block text-base font-medium text-[#07074D]" > Password </label>
                <input type="password" name="password" id="password" placeholder="Entrez un mot de passe"  class="w-full bg-gray-100 p-2 mb-4 rounded-md border border-[#e0e0e0] text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            
        
            <div class="buttons flex">
            
            <input  class="btn border border-red-500 p-1 px-4 font-semibold cursor-pointer text-gray-100 ml-2 bg-red-500 hover:bg-red-600" type="submit" value="Ajouter">
            
            </div>
        </div>
    </form>
    </script>
    </body>
</html>
 