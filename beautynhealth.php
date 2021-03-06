<?php include '_db_connect.php' ?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- navbar -->
<?= include '_navbar.php' ?>
<!-- end navbar -->
<!-- content -->
<div class="container">
    <div class="row">
      <div class="row">
	   <div class="col-md-4">

            <img src="http://beyondskinocala.com/wp-content/uploads/2015/03/skin-care-3.jpg"height="241"width="360">
          <a href="skin care 1.html">  <h1>Skin Care</h1></a>
            <p>Everybody wants to feel good about the way that they look,but it seems there is no shortage of ailments out there determined to tear down your self-esteem. Whether fighting acne, dandruff, or anything in between, society is engaged in an all-out beauty battle. While there is an endless array of products out there that target our insecurities, a lot of them don't deliver the desired results. Rather than frantically searching for a miracle cure, make sure you are not fretting too much over the little things (nobody else can see the red speck on the upper left corner of your nostril, truly) and be smart about the way you treat yourself. Resorting to unhealthy measures or chemical-laden creams isn't always the best route to go. When all is said and done, being healthy is what gives you the ultimate glow.
			</p>
        </div>

		 <div class="col-md-4">

            <img src="http://efamilyportal.com/wp-content/uploads/2015/09/Hair-Care1.jpg"height="240"width="360">
             <a href="hair care 1.html"><h1>Hair Care</h1></a>
			<p>Many of us follow a strict beauty regimen to keep our skin, hair and nails in good health. In fact, people all over the world spend millions of dollars to enjoy beautiful skin, superb hair and strong nails.When it comes to beauty, importance should be given to natural ingredients rather than commercial beauty products. Chemicals and toxins in commercial products can do a lot of harm in the long run.There are many natural ingredients in your kitchen that shouldn’t be underestimated.</p>
        </div>
        <div class="col-md-4">

            <img src="http://trinityhealth.org/assets/img/sections/VisionGalleria/EyeGirl2.png" height="240"width="345">
           <a href="eye care 1.html"> <h1>Eye Care</h1></a>
            <p>Eyes are one of the most important channels we use to gather information and make sense of the world around us. We also use our eyes to express how we feel knowingly or unwittingly in a way that is often more powerful than spoken words.Despite of the importance of our eyes, they often receive little attention from us.But without proper care,our eyes can quickly deteriorate with age, developing eye diseases that can greatly affect our quality of life.It is never too late to start. Pick up some tips from this article and start cultivating some good eye care habits and practices to improve your ocular health today</p>
        </div>


    </div>

        <div class="col-md-4">
            <img src="https://www.jameda.de/_images/_uploads/artikelbilder/big/bild1438156017405.jpg"height="240"width="360">
           <a href="dental care1.html"> <h1>Dental Care</h1></a>
           <p>Everyone wants to have a great smile which is why good oral hygiene is important! Having poor oral hygiene can lead to a variety of dental and medical problems in the future such as gum disease, infection, bone loss, heart disease, strokes and more. Regular check ups and cleanings can prevent these problems as well as provide you with good oral hygiene.</p>
        </div>
		        <div class="col-md-4">
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMTEhUTExMWFhUXFRcaGBgYGBgWGBgbFRkXGRgbGB0YHyggGCAlHRcYIjEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGBAQFy0lHR4uLTcuLis3Ky0vKzUrLS4rLS0tKysrLSsvKy8rKy0rLy0xLS0tMjUtLS0tLS0tLS0tLf/AABEIAMgA8AMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAAAAQIEBQYHAwj/xABHEAABAwIDBQUGAwQGCQUAAAABAgMRABIEITEFIkFRYQYTMkJxI1KBkaGxB2JyFJLB0SQzQ7Lh8CU0Y3OCk6LC0hUWZIPx/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAEDAgQF/8QALBEBAAICAQQABAQHAAAAAAAAAAECAxEhBBIxQRMyUXEFYaHwFCIzUoHB0f/aAAwDAQACEQMRAD8A7jRRRQFFFFAUUUUBRRRQFFFFAUUUUBRRRQFFFFAUUUUBRVdtfbmHwwBedSidATKj6JGZqpf7TOqTczhVBPv4hYw6fkqVfSg09Fcy2h20WDv7QwrX5WWlvqHxJAqixHb5jjjsc5/u0MtD6yamx2qiuDufiAxwe2j/AM5n+KK80/iKoeDHYtP+9aYeH/SpJpsd8oriWD/FXFJ1cwz4/MleHJ+MEVptmfi7hTAxDTjE+YQ43+8jSrsdHoqFszarOITey6lxPNJn58qmTQLRRRQFFFFAUUUUBRRRQFFFFAUUUUBRRRQFFFFAUUVle1/bFOFUlhlHfYtwezaBiPzOHypGs9KC72xthnDIveWEg5AaqUeSRqo9BWK7RdqnAm5939haPhSIXi3B0To18ZrnO3O2vcuFaXBicbmC+R7Jj8mGSfqs6wKwOKxrryytxalKJkkmSTXOxvsV2+DZV+xMJaUdX3D3z6upUobvwrK7Q2q/iDc66tw81KKvlOlWnZTsbicafZI3RqtWSR8ePwrpuzPw+wGF/wBZcL7nFCZAHqBn8yKDivck16o2a4rRCj6AmvobChhvLD4JsfmUAT8gD9xXu7tR9Oq22+kJT/eJpofOTmyHhq2sf8KqhOsEZGvos9oHZI/aEfvN/wAq88U+86NcO70U0hz7EU0PnBQimpeI0rq/afYBWD/QMPdGSm1uMKB9M0n0rlm0NnvMmHUFPKRE+nA/CiPTZ+03WFhbLim1c0mPtXX+wf4tvLWhjFthdxCQ6gwZOl4OX1riIXXY/wANOyaW8Op59IUt4CEqE2t9QeKpn5UV23DYlKxKTI+3ryr2rCbPvYVuKNvCc46SdR66VrdnbRDmWihqP4irsTqKKKoKKKKAooooCiiigKKKYtUUDpqFjtrMNZOOoSeROfy1rFdqO15zS2SlsGLhqs9DwFY9/ElKe8KJvOmZVmONeDqOt+HxWNy3x4e7mZdSc7Y4UaLJ9AR96crtUyPK5x8vLXj/AJmua4ltTaQ/Fy1qRKLRu5ZA8SBr617bR2yGsIX3jAtkoA3iVHJIJORVGsV4f4/qLzEU1y0+DSPLRdufxGRhWAGUk4h02tpVlHArV0E1wva3aBQDjbaypThnEPk77x91J8rY4Aa1X7X2s4+6t50y458kJ4JTyy/znUBpgk5V9mu9R3Ty8kzzwdhmCogATNdh7H/hy2yhOI2hIJzbw48Sv1fTLLqasOwfY5GAbTiH0BeJcEtNnRse8vrmKv8AG4uwkn2j6hx+kxoPy10eE7EYw2AKKcOwBCUIMZcpGavQQPWqlG1JJbwzOnmX14hI/jS4PZq35W6qVgxadEnl0BH0q/Ts0BSFJgWyPVKhmPmAfhRGbxOzsQ62ouOqyB3RkJTnoIFSWuzKDaoZgwSctCD/ADrQ4h6xbaYFq7pJMEWpKtIgiBVfg9rKWkBtoA+0ISolO41bGgOarhlwoK9vs633qxGViD81OVGx3ZdCWlHO7OI5kwn7itc29e2FojeQFJnTMSJiq9jaaV2SE/1IdWJzEiUhIOuij8qDPObDfahLTqo5HMQkdZqsxaySW32ARGZSJGekoOvwrb7Oxa1qCXEpBU0lxNs5BRgpM6kZZ8Z0p3/pohcwVKUSSRlyT8gAKppxXb3YVtwFzDKHVPl+HFB9auuxvbhQWMJjtxYhKHFZZ6WucPRQy51q9r7CsKQwYcIPyESpXMcI4zWX25sRvEixxNroGSo+3MdPlUR0Ijgac0qCM4I8KuXT0rB9h+0DiHBs7GHfj+juzkscEKJ1PI/Ct0RwNHTa0UUV0CiiigKKKKAooNMUqgFGqXawcfSW2yAk5KWfsBxr2x+Ju3E8cif4CvZsBIAGgrKbReZiPTrWuWdR2MYAF6lrjPUJE+g/nTldn2B4Wh8ST/Gr5a68xXPwcf8AbC99vqzjvZdKtTaOlcS/EHaKF4gstkqZYJzPmcORJ5xEDlnzrtv4g7d/ZME44PGRaj9SshXzKtRiOpJ6k6k1a4qVncRDmbTPGzU5mutfhN2YSlJ2hiEyhsw0k+dfP0H+dK5z2a2UrE4hphHicUE+g4n4CTX0FiXWm2wGx/R8MkJQBneviRz/AMetaIZjsY4CTkp5yDHIcPSJyFSNiYBJ9pJK53p1B4gg15bCwZX7cqBKjPMR05RWibYSFFUbxEE8SBpPOiIYKg8pKG0lXdoIJWUhSSoje3TEQY11rxRtuU3hAsSlBWSrMd4SkW5b0WkzlIp21WHSpRbTNzSUEggEC8lRE8bT9a8sRgVqC0JbtQ6hpOo9n3ZIIMa7sRHGqJm19n99Yk+EFV0GDCkkZfGoDeznm1qcT7QkuiFKAycsKVTHApzHWr5RpKDwwWH7tpDczYgJnnAiapGdhrCQ2oIIPd3LneTYi0pSIzn1GprRUlBWbNwbiVBTlspaS0m0kgwZKjIETCcs/WoLm3lgIkNhRBMGZcKXO7sa68c51FaEGs65sV2CBYSpJTcT/VHvVOXJyzyUNIzSKCVgsWVOBRQm14rCSJu9iYF05GRJERGdQ9vbNSQAJU6qSkcTEZz5QMs+FTcFs9aVoBtsaLpSQTcrvDlIjdtE8TNWXdiSqBJABPEgafeg5Zt7YgxDRbdMOpzSsCM+Y4jr860HY3bqsWypDojFYchDw94aJc+MZ9fWrHtDg0phwq35yyzP6QNetYzFPnDYlrHAEJHs3082lkAk9UHP4VB3SiiiulFFFFAUUU1RoEUqqjbO0QgRMczynQDqanYl8JEqIA5kwKxe3UqeuCLFXK4lMWjiJCuQ4V5OszfDpx7aY690rTY2LQ6VKQZSnKeBmMxzGvyqe8/VDspDjI7oFLiyCpTi1WJABgTrOteeLxYSfa4/Ct/lQC6r+8PtXPRzE4+PzXLH8zQNuzXntHabTCbnVhI5cT0A4mshie0OCQN/F4l3ohKWkn5gfeql7t9hmiThsIjvB/aPLK1D6GPnXqZI3bbZeM2g9hy4jucLfCEqMOKESpduug486wG0+w2NaKoZK0gmCghRInIwM9K6H2Yx+IxWMdexKiVIQAkcEhwzujQCE/Wtomg4f+HzaxiVhO6qwoMiFAL8QA4GARXXO6JU2ykSlAuUBlmf8Kxv4bo7/E4rEq0U4pXwUpRH0Are7EwjilLdSuCVZBSb0x8wR8DVRe4bBIBvSLSRnGQV+oaGOetQ/wBueLhZSUX3OQopJFqEoUARdrLgEzwq1bmBdE8Y0+E1Wr2csOl1BTdcuAqYhaG05kDUFANUR8LtpbgS6AkN3toKYJVLgTJCp4FQERzq8qkwuxFNgNhYLd7aycwqWwmQBpBKQZ4Z61d0BRRQTQFFIT0PyNAM0C0lFFBRPY95LxZvSqS2L7I7srvJTE7xsROvKo52y6UvEFIOHQpSxbk4UrWmBnuC1sn1V0qWzst4J3ltlYd70KAVvKzBChOlptEaRXirYK7VgOJ9slSXjafMtSpbzygLUnPoaC0OGSm5SUypWp8xHASdB0rKbU2bN7awIUCIGevXj9NK2D4VbCCEngVAqA+AIn51R7TwdpSpThUrrCR8Ej/Gg31FFFVRRRTVGgCqsDtntpcXO7cSxh2lFC8QoXqWsatsI8yhxVoOta7az9raoOoj518243Gd649iYUQp0pbCeAjX5BHzqTI3WN7XNTLeGLquDmMcuPqG0yE1qNjbRLzaXQBvgExupBOsDX0FcWCFzae9v1KuldD7GbS/ohKUqUWpEEbx4xIBgegMxXzvxCszjifpLbDPKP8Aio8UqwwgG4OgSm7MFH86wxfVwcWAPGAi0fCNa13b7ELeZacKVJKXyEgeJKXEZXHTMoPI9Kx1x/2sJi/rXfQ/0oj6bTN8xpdPFa4Pg3aDPvruzv3eFLedfa73gHLOlBVmJcuE3nmK9rF0rsk0AVkaWoHwCER/GtBjFw24eTaz8kms92RckuHPRGv6RV9jxLTg5tr/ALprmHTJfhi0EbPWv8s/SPjW22BiWUoT5VHmlSZn4QaxP4fgnANx7h+c10nZCld2JEZe9M/TKunKHtTai230tggSGrUkSXL1lKxPktAkc5p+ytouLU0VkEPtKcSAIstKd2fNurGfMGlxuylLWohSQhws3gglQ7hRULYy3pjPTrTtnbLU2pFywoNNqbbgEGFEGVSdQEpGXWqLWg0lBoAmpuBw4gKVqdByFVmJO4r0qejF5UVYFVVW0kgb6cuY5j+dPXiKr8bicjU2JAVNLUbZ65QP86VIqoa8gqBAUUzxESPmCKoBiXCwhwOquU5ayIT7QKXuFYjigE5RlnVxtPCl1pbYWUXCCoCSAdeI1GXxqIvZjhW0vvgC2FAANC3ejMC7IgC0dCaCJs3GuKUytSyUvB42wIRYQUWwJ0kHWafj8SkglLbkzr3ZE/ExNSMJskNrSq8lKO87tEAW96QVSfNpA5Ca9dozadI666/Kg1dFFIaqg14uqqNtHazLMd44lJOg1UfQDM1CO2EK0CvQpj71nbJWvmVisz6VHb/Hd3g3VcQhcesQPqa4ZhcMrumkobU4YXkmciowCR6JFdx2syMSkocSCjQp58c/pVHs94AoRh2EhJUU8UwhIFxMDdI0jrXjydbWPljf6NYxT7c/Z7IYpSSO7UniVKcgxGnOtT2a7PPMLXcE2qAFtxVBTxOXInLpW3daAGZAz1MDjJGfOKq+0D1zRSy6gOKITPeJTalSheqZ5Cvn5OsyZY7J1qW1cUV5U3aHYBew7jaVLU4S0QVkDwElIFoEZKPDjWHxXZjEtwSyshIztXN0a/eulbNbeU+F98C0EDin2iiTJtHhgBGfwq6cw0gAaZT1AMx8a5xdXfDxGpLY4s4Q7hloMLbcSpXhkxbn1/hXmWjoErlM3G7xV2vbryGm7lJCpUEgGALlmATIOQEnThWdxGwMFiHO7KC07aFQnKBnxTkrMHpXux/iETG7V/2ytg14lG7GPys8Lm0kDjklGv1rWxOR45fOsqnsm6ytLjK5AjI5KA3oHI61ZYXbJCrHk2rGvD6V6KdRS3iXE45iFb+HiIwjrM7zaloB4goVW42QwotpJdXlwAQB/dmsV2c9ljsUzwcUl1PULBu+tarZmKbbKkBKlLScglJUc+uifmK9UMmgccCQVKMAAknkBmTUJza7SSkG4XJSo7p3Aswkr92Tl8DUTtBcvDwQpAUtsOaFSW7heTEjTXpVIt1xacUlQUovIQhhVplwIW4kEwIneB4ZGao21IaU0lA1YkEVSpxZbNiuGnpV3UPaGAS4II/woIbm0RzquxWNKiEjU6D+fIVQvbNWNoBkOLiyfEYzHLStns3ZCW89TzNcxO2mTHNNfnG03ANWoA6VIoorpmjbQeWhBU2lKiASb1lAAAJJkA1Uu9pkhRAQSBhy8rgQdwhv1hYJ5SKl7eaWtCUIQVpUod4AQDYMyBcQDcYB6E1V43s6tSiUKUAtp+QspIS46ptQGQkiU88rRQXOBxalKcQ4lKXGym4JUVJIWJSQSAeBB9Kh45iAbXXJkZXAxx0OlemGbdCnni2AtzuwGysaNgjNQBGZUeHAVFxOLC1oSptSFa7wBy6KTI+1Bvaq9vY5TTfsxLijCeQ5k9BVk4qASdBWU2jtOVjIkmbRpCep+FY9Rftpx5lpjjcqFGA7hKnlqLzyzmo6kngOn8q9V7XQxcX1gKJ3W0iSAOMDmedDOLdW0t1cCEkhI06etUOxuzQXvrzJz+dfOjBa0Rv29E2iB2h7dBpq5CIuBCbsyTHIZcq5f2g7V41TjiBiFobC1AJbNgyMeWDw51pfxLaCVYdpOQ9of3lISPomsxjEBXFBUZuy8OdevB01aRuY3LHJlmZ1DOPuqWZWpSjzUSo/U15x/mKvF4ZPNECYPM8q8lYYfku5cq9TLbUdktrOHDFKBLjZCcyMkqm0/P10NUfaHFvYbFLDTziEqhabVqAheeUGIma9NgOpad3iktqFizlorlOWtXn4i7DSlnDON6JBbVOZM7ySSOtw+IrwdtcXUamOL/v9/dvubY/sz2H7c45OX7QpQ5LhY/6gaudlfidimiSUMrJABJTapQGkqTWLVhuRHz09aZ3B5ivVbp8VvNYZRe0e3cezv4jM4mQ40W1phWSrxrE6A5SOFbRTrDzaSoBQIFqokieOdfM2yMT3TqVKO4ZSuPcXkr5DP4V2rsfjipotqO+2YMcQeI6HX0UKwjpa0tujv4szHJe0eD7h5nEoOSDYuNChZkHpac/ia0yMQQUuJzkQZMD4xUDG4VLja0HzA+kxyqv7PYuEqw6zvJAAOu6dFZ6xp8Otb4789s+Wdo9w3HfhNoUpIUrJPC4jM2iva7rlqf5mqPZNjZIIKnDAuO8pQ9eAHLIVO2thS60W0qCbiJumFJBBUnIg5jKRzrdyjp7QsltDiblIUhSwUpmEIMFZ5D71bA1j8KhxtCitskrYfbSEIVF3erKUx5bgrKcoFavDItQhJ1ShIPqAB96D1oopCaDMYhv/AEqk/wCwH3IrUVQuo/0gk/8Ax/8Avq9Fc19t8077ftB1RseV2EocS3GZUpN4AAk5SPvXuVDWRHrVftvDLdbDaLM1ArSskXISZKd0E55A5aTXTBVN9qCULUQkKbwyXFNkwpS1i4AcQkCJ/X0q12e+5e606UqU3YbkptBDgMZSYIKVDXPKqrHbAdeC0LUhKVrLpUmSoLKLLQCBKQYMzoIirPZzKwt1bhR3iw3KUSQlKAoJOcEySo6dKCScQlRWhKxcnxARKZ0JB4VVB42uOrghI1GQPw4fM616bUCXSG7T3k7p0UBzSocDP86j7cQAlGFBmRvn8o8ZMfujqo8qSNVtvGpR3bZ/tFR8P/2KptsgBxpfDNJ+OlVn4lqUhbK87YgEcFA/4ivPDbbTimZOS4309RqR0rxzmi2S2OfMeG8U1WLQmNFBS4zMKgx6HQjnBpOz2KSps6BaN1Y5EcfQxWR2uFLIkwpOipg1BwLzyHknvIKyEk5EkE6VPjds+HXZuPKi/EZ2cY2n3W0fMkqqhU7+dNx8e7pVr20XdtBcGCLQIz0Tl96qi4eC1T592vXDzSYXE++mwTbu6mkKz76LzqLNBTy9+dVudm5xoLquC1X+bd4VUecp0vRZxNvGNK1mx8T+1YVzDKUC4EgokCJGaDHrkazHfD31d3+jU0IxK0KCgs95wFsbsZjpWGfF8SvHmPDSl+2UEJGlyY8+7mk8ulNtHvIy8OWtW+KcS57VC4SSO+FslKuBPK77g1DLnNZn+z3K0pbujbmY1KvW2PeTJ8WWlbLsltUoKVgzYQ2vqg5IUPqk/wDBWcu5Lz8+51r1weLDa7pubIUm22LwrUHlVtG4IdtQoEAjMESKy+2F926VpKQpJlN2QMjNEnLej6Cm9l9sBPsFqkRLaz5k9eo0I5+tScdgVPLEKKRO9Gc/PIca8ee25rr5ttaR5+i42RtZLzYcbO9wnIg+6rlVzs1QBvcVc8d05eGc7UDgn7xnpXP8fsV3CunE4PeBzcZOiudv19PpWl7PbbaxSQ40qFpHHxJngR/GvdE7hg2HeCQJzMwOJiJj5j51B28W+5UXGw7EWNqEhS1bqBnzJ+9QsHirStx7JwiBxASPClPUnM8yelS9qtNrDYcSSS4mwBRSQogyZSeCbvrVVnsLhC0JUb3msVh2g5ndba0FJH5TerLjPStkqoKNlshaV27yYgkqMlIhJMneUASATnnU00GHxe03RiTiL9xK+7sgf1YeDSs+ckqn0rdxwrB4zZjpxJYCNxTneXyIDZeDqiRzkFMVuVZz1qQ0v6+zGu4EKclhpooW9a20rJlzuG3Ata4B1K4GR8Arw2IEqYDualodwiELUN8JhsWzwBuWI41p0bAw6UBAQQkRaAte7AIFue7kSMudNwuDYUskNBK2SEAaABI9mY00ORIMZ1Waz7wSUgiRBI4gGYJ9YPyqq2otJMpJS8gkIMZiYyI8yDllx9a88ZiS4ULYSS8JEdDFyDz4EHgQDUx9TODQcTiVi4cTnBOiQPMo8AKBl4wrJfxBhyMwN4icgE81E5AdaqcKlZlxwAOLgkDMIAm1APG2TnxJJqEjGOYl0PvpKAme5aOdk5Xr4Fwj90ZDiaswZrmVavbuBQ82UK9QeRGhrnu0dlKRkk2KuEKGmvDl6V0zFJrL7WwxOlePq+krmmLb1aPbbFlmnHpl3W3SjeCVqj0nPmP5VD2Vhr1pURbCtOcZ6mrl1hfI03C4JYVerQA/WsMfT5omO6+/8NLZK64hyntGsq2g7EzcqI1HhiosnSXcvH1zqRt3exr0AzJAgxG9r9KiBHJK4T4t7WvqPIcpZ1l2D4BGlBuzFzt+dxjUU0p42r3vCLtKUtHww5IkqN2tEBc4y7ZwEcedEqmLnLzxjQRSH3rXLdAJGvOl7pXghy853TwoIZdU2q9sqECFXDJXMKHEVZYHGNPn+tLLkABKzuj9C/4HP1qKtEi61y0QCJGZ51XYnAExuqk6elczX6eXUS02K2M+gDxwdVJtIVnwM517Ybs3iXPKsJztugR6xWMw7r7U92txHO1RSPiBlT8VtPEuC1x11STwKlQfhoazmuX1Mfr/ANdbq6Eja+FwFrS3C+6VSpYghuRBOWnDIZmK1uw9sJdltQCXQAYBBC0nRaD5ga4Szg1Exacq1OyMaUISlQWEBW4oRe0TqU9DxToelKYYrzvcz7Jvt2OKy/aLs0q84rCK7t4AlSRkHP5K9cjXps3tKUwjEgCckup8C/8AxPG05+taNhvvykIVuBQK+oHl+Jj4TWjlndl9slJShG0GFNXgFKyk2qnMEiMj/nKtTgm71peZdStKUkITMgFfiPxAA+dW7+HQ4kocSlSTqlQBB+BrMYj8P2gouYR5zCr/ACG5HxSdfnXW00ulbUU2FqcQrKSIzACRkPpTNnY1DbLSLpUAhKpkZnxH5zULDHajACVpZxaR5grulfurBB+dSlbZke1wDyTz7tK8/wD61H7Vdhy8W3+1pN4zYP0X/iKftDGocadbmCQpIiTnG6emf2qAnHslQPdOXARJw70+nh0q1RthoCW8G6o/7sJn/mKTUdTO3k3tFbyW1NNqJNqjyzGYPz+lSUbDcW53jrgQCmFIGcgSUnpEq+debm2cYvJtlphPNxZWr9xsAD96oWI2WXv9ZdW8Pc/q2vihPi/4iau3L2f7RtNks4Frv3RkopMNpP8AtXYgfpTJ9Kocf2YcxHtsQ/fiU5swLWWTqAlE7wPEnM9K0zTaUpCUgJSNAAAB6AaULUACTkBqTpUVjtnYwqBuTYtJtWiZtUNR1HEHiCKZt3tGGUltGbhEk6hsc1DieSeNRu0vahCrv2VKeIViCJG7wQPORz0Fc6xL052qgzEqzUo+ZR4n/IqI+rXUVXv4eatiK8HG66lVKcKKibVQA2fUVeON1TbfybH6hUV88Y4X4p8RJKomYjeWZ+leXdznZkj8/ipXQFuvCBmvMkwAJUcvnTAga2I3NBd4qOTu742Hf/P4aCxO7Yd3Mm/XpTe7/IiV673hoUyPDamEaG7xUDo8/dnOQE36daP2c+C0zrdf9KaU+exEqkRdp1pP2ceC1MalV30oHgefuzCYEX69aTuPLaZVGd/hpAPP3aZGQTd01oDHltTvZk3aUDFYefIYTE73ipP2XjYd7QXDKvQIBzsTuab3io7v8iZXrveHOgE4bVNqt2So3a04p8/dqgyAm7TrTe4B3bEwiTN+tKR5+7TJkRfp1oiZg31ty3bcFZqClXJIjQg1qOzHaJbY9mu0Ax3TypQf0Oap9FD41jP2ceC1MalV/wBKW3zhtIiAE3a0Hb9ndrWVEJdlhZ0C4AP6VeFXwNaRtYIkEH0r52wOPcZ3E22qgqSVXI+KVZVZ7O7SKbJKQWwIjunIB9ELBT8oorvJrzXXLsF2+dAEvNrng4goI9SgqH0FWeH/ABDnxIbke66I/wCoCituqmVlv/eqT/Zp/wCa1/5VGe7anO1LI/U8P+0GiNiaa4sASSAOtc/xnbJUT+0tpHutNqWo+inCkfSs1tPb4cWBaXeZfcvAn8iAED60HRMf2uZTKWgXlDW0gIT+pZ3RWC7SdonHSA4tLgOjSDa0P1k5u+mQ9aocbj3HoK7LUeBINqfgkZD4VE7r8rcr1z8NA/EuKcMKA3eN0D0AGQHpXkEectjOQBdp1pxbHhtbhPG7xGkI81iJVIi7QUH1xSEUtIa6VHdFZ3tOYQn9X8DWjdrM9rDuD1P2rmR85ogqWDaAVZlXoI+9OnjDcpi0c682jmsKKQm7OROiRFP7zQyi4eEW6iiFAA0DW94jypCBpDcJ8J96kuGgU3n4zGlBcHNuB4MtTQOJ80N3KkEchSd2nweztGczqeVBc43N3GbhGgpJTpc3YNDHGgdd5rW7tAOnOkDY8Ps4MFRnSk7w+KW7+AjhQCnS5u3zGONA7LWG92LROtEDk3KvFn4c6aHNCS3IiwRrShQ4Kbz8eWlApQnSGwlOmfioJ80N3KkROgpLxxLdo8GWp/jQXOMt3mbhboKBe7T4PZ2jO6dTypwX57W7hkEzwphKfDc3YOManlTu980t38BbwohwSPD7KDmozp0pts5+z3ckjnSAp0vbtyKjbxpQsalTcjwC3WgO66tyrxdM/pSFvq3anTqf404LGlzefjNulBcT7yLR4N3U0CEHX2dxkEchSloZplu0ZzzNKXuNyLzN27oKQrTpeiwcbdTRTgfOe7u0A6c6LUjd9lBgqPLpSd8dbkX8BboKaFp0vRbqo28aIdeMj7Pdi0c6TLSW5V4vy0nfcbkSIsFtJ3nALRn4zbpQBCebdqfDlqaCrj7O5UyI0FIXR76YHg3daC6ffTeZu3dBRX1zSGiiulR3qzHazwJ9VfaiipI+cWFZrlUJvzynyiK9Q6db97K3c4UUVEIFjgsR59ylv5rEeTcooogv/OLj4tzhQVp98WDTc40UUB3h98X/AKOFKFp0vFnE2caKKBQ6dbxdlYLOFJ3nAL/WbKKKBe95ryHg3NaC6ffFxm7c0FFFAFxPv7gmNzU0ven3/afo0FFFABwaX7nmNnGhLx1K97KzcpaKBA5wC/1myjveN+Xk3OtFFEKXTwXvGbtzQUhdHvmwabmpoooo71Xvm8/k0EUneDgs2ebc40tFAgdOt5uysFnCgOcAsx59yiigTveJUY8gs60Fw6Xm4zebOFFFB//Z" height="238"width="340">
             <a href="Height & Weight care 1.html">  <h1>Height & Weight </h1> </a>
            <p>If you're only a few pounds overweight, losing those pounds isn't going to make a difference in your height. The exercise you put in to do it, though, might. The improved posture gained from regular, functional exercise can make you look noticeably taller. That said, the entire game changes if you're clinically obese -- in which case, yes, losing a significant amount of your body weight can leave you standing a little taller in more ways than one.</p>
        </div>
        <div class="col-md-4">
            <img src="http://www.homeremedyhacks.com/wp-content/uploads/2014/12/Natural-Anti-Inflammatory-Foods.jpg"width="360"height="241">
             <a href="diet 1.html">  <h1>Diet</h1> </a>
            <p>A balanced diet is one that gives your body the nutrients it needs to function correctly. In order to get the proper nutrition from your diet, you should obtain the majority of your daily calories from:

  1.fresh fruits
  <br>2.
 fresh vegetables<br>3.
    whole grains<br>4.
    legumes<br>5.
    nuts<br>6.
    lean proteins

</p>
        </div>
    </div>
</div>
<nav aria-label="Page navigation" ><div class="text-center">
  <ul class="pagination" >
    <li>
      <a href="foodnnutrition.html" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li><a href="medical.html">1</a></li>
    <li><a href="lifestyle.html">2</a></li>
    <li><a href="foodnnutrition.html">3</a></li>
    <li><a href="#">4</a></li>


  </ul></div>
</nav>
<!-- end content  -->
<!-- footer -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Get a daily health tip</h3>
            <form class="form-inline">
                <div class="form-group">
                    <label for="exampleInputEmail2">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                </div>
                <button type="submit" class="btn btn-default">Signup</button>
            </form>
        </div>
        <div class="col-md-6">
            <h3>Stay in touch</h3>
            <button class="btn"><i class="fa fa-facebook" aria-hidden="true"></i></button>
            <button class="btn"><i class="fa fa-twitter" aria-hidden="true"></i></button>
            <button class="btn"><i class="fa fa-google-plus" aria-hidden="true"></i></button>
            <button class="btn"><i class="fa fa-youtube" aria-hidden="true"></i></button>
            <button class="btn"><i class="fa fa-linkedin" aria-hidden="true"></i></button>
        </div>
    </div>
</div>
<!-- end footer -->
<br>
<br>
<br>
<script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="./script.js"></script>
</body>
</html>
