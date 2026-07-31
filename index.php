<?php

session_start();

if (!isset($_SESSION['usuario_id'])) {

    header("Location: paginas/login.html");

    exit(); 
}
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>𝗡𝗘𝗫𝗨𝗦 𝗦𝗧𝗢𝗥𝗘</title>
      <link rel="stylesheet" href="css/Home2.css">
      <link rel="icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/1037/1037049.png">
  </head>
  <body>

    <header>

      <div class="usuario-topo">
        <span>👤 Olá, <strong><?php echo $_SESSION['usuario_nome']; ?></strong></span>
        <span>|</span>
        <a href="logout.php">Sair</a>
      </div>

      <h1>⚔️ 💎 NEXUS <span class="destaque-store">STORE 💎 ⚔️</span></h1>
      <h5>Você só encontra tecnologia de qualidade na NEXUS STORE.</h5>
    </header>

    <nav>
      <a href="#Placas de video">ㅤPlacas de vídeosㅤ</a>
      <a href="#Hardware">ㅤHardwareㅤ</a>
      <a href="#CELULARES">ㅤCelularesㅤ</a>
      <a href="#JOGOS">ㅤJogosㅤ</a>
    </nav>
      
      <section id="Placas de video">
        <h2>ＰＬＡＣＡＳ ㅤ ＤＥ ㅤ ＶÍＤＥＯＳ</h2>

        <div class="container-cards">  
              
          <div class="card">
            <img src="https://images2.kabum.com.br/produtos/fotos/704642/placa-de-video-rtx-5090-windforce-oc-32g-gigabyte-nvidia-geforce-32gb-gddr7-512bits-dlss-ray-tracing-gv-n5090wf3oc-32gd_1738243337_gg.jpg">
            <h3>NVIDIA GeForce RTX 5090</h3>
            <p>R$ 35.700.99</p>
            <button>Comprar</button>
          </div>
                    
          <div class="card">
            <img src="https://m.media-amazon.com/images/I/71lZess7M8L.jpg">
            <h3>NVIDIA GeForce RTX 5080</h3>
            <p>R$ 11.600.60</p>
            <button>Comprar</button>
          </div>

          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShO0YmiZVdHA1lwkp8A2pU693f8NO2K1r5T_LwdqTDbw&s=10">
            <h3>AMD Radeon RX 790 <br>XTX</h3>
            <p>R$ 5.800.60</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThlypBawxyYP79oc32P2YaHNT1X9wPzRtKMrtM58gJzw&s=10">
            <h3>NVIDIA GeForce RTX 4090</h3>
            <p>R$ 4.500.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUCt60slyWE3p0EntGrhl_otTi4vmLBUWsvorljh5f6w&s=10">
            <h3>NVIDIA GeForce RTX 5070 Ti</h3>
            <p>R$ 6.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRA2pGpp2zK20b6ocnUq2M1dzbCmU17HCLrUHzJSYmfpg&s=10">
            <h3>NVIDIA GeForce RTX 5070</h3>
            <p>R$ 4.600.60</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkSdfaon2dvngjuE36sxG86wdbwhWO8GV-sy-AyDdsWw&s=10">
            <h3>NVIDIA GeForce RTX 4070 Ti SUPER</h3>
            <p>R$ 4.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiE5ERYfII04HCMG0u3B-i5noZN00t1ShRiwVa2HmywQ&s=10">
            <h3>AMD Radeon RX 9060 XT</h3>
            <p>R$ 5.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRybP3lOsFzj06AbYFCuvivf_F6Zpk5pYFzaofJILsN6g&s=10">
            <h3>NVIDIA GeForce RTX 4070 SUPER</h3>
            <p>R$ 4.600.90</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ5zd052MsOxALxuY_Fa3zo4Wi2IP-DkSr4roA6VxSNiQ&s=10">
            <h3>AMD Radeon RX 7900 <br> GRE</h3>
            <p>R$ 5.800.60</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKrJ8igtgPriIgmvOIbzmJ21xnWVNXhln5R-fYlLmF1Q&s=10">
            <h3>NVIDIA GeForce RTX 5060</h3>
            <p>R$ 5.300.60</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIO0rlZwTqmzaSH5nzDiqWjIoXtSwMytGf4laJSLUsLw&s=10">
            <h3>AMD Radeon RX <br> 7600</h3>
            <p>R$ 4.800.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQuSkFPpqg9XpZeTv7Xz40-PqfCnm3Ar4IdSx3h3T2Kog&s=10">
            <h3>NVIDIA GeForce RTX 4060</h3>
            <p>R$ 4.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRiF4lCgiC12C4pcXQNPFiqtgLOmeTjLIfhRTk22MEwpw&s">
            <h3>AMD Radeon RX 7600 <br> XT</h3>
            <p>R$ 5.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTPCF96k5KO-69NZP70fSm6hC1rTga6lKyB_rh7OwBA4A&s=10">
            <h3>NVIDIA GeForce RTX 5050</h3>
            <p>R$ 5.800.60</p>
            <button>Comprar</button>
          </div>
          
            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUCt60slyWE3p0EntGrhl_otTi4vmLBUWsvorljh5f6w&s=10">
            <h3>NVIDIA GeForce RTX 5070 Ti</h3>
            <p>R$ 8.500.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfWLw2IH6Dq1KKolvrymDuXcAAHXBN4YAhffg_sbFsAQ&s=10">
            <h3>AMD Radeon RX 7900 <br> XT</h3>
            <p>R$ 2.600.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR8YKIgCFLYVkQur_kuKqLWKnf2yQacf5RbtB5iAaCnOA&s">
            <h3>AMD Radeon RX 7900 <br> GRE</h3>
            <p>R$ 5.800.60</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ_iHxpCyfNN1aJn1oJnZi-0H88ijKKmRjQBoeWy7iMjg&s=10">
            <h3>NVIDIA GeForce RTX 3090 Ti</h3>
            <p>R$ 12.000.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSKMgCBRJfOVHWz3zW6mhDQGZLsAtASapX9I0df-T31jg&s=10">
            <h3>AMD Radeon RX 7700 <br> XT</h3>
            <p>R$ 4.800.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhkjcKeDhWbij3saBFzYfFE4HOF77VWEumaQv3TzvuOA&s=10">
            <h3>AMD Radeon RX 6950 <br> XT</h3>
            <p>R$ 6.500.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdPDTzUH6sSDAAnfH9fJgQ8nXMKzwkx-wOyESI-7szbg&s=10">
            <h3>NVIDIA GeForce RTX 4070</h3>
            <p>R$ 8.500.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdQfmIbKKxW9RUszL7XV43a7Q_4wgJ7MGmCZQBrM7xug&s=10">
            <h3>NVIDIA GeForce RTX 3080</h3>
            <p>R$ 10.000.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlE8ED_BT38xzOSigMRlT0Tz4t9HIbqSjAfUhWOa9kig&s">
            <h3>AMD Radeon RX 6750 <br> XT</h3>
            <p>R$ 5.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjdh1ezWxbIwzyOHbQLbGX68hm-cTQUtsx0lAfZCKKuA&s=10">
            <h3>NVIDIA GeForce RTX 3070</h3>
            <p>R$ 7.500.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRifUrD3DX9dFnYZSoMXkjwPSI0APAEMWt2GRpP-XLQkA&s=10">
            <h3>Intel <br> Arc <br> B570</h3>
            <p>R$ 3.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZpIOPvIpsS_EUO930eSYNt5ofhih_CV4vGfeTlcNLdA&s=10">
            <h3>AMD Radeon RX 7600 <br> XT</h3>
            <p>R$ 4.500.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRbADZbQ8gs2yrLvSPktuEyDN8zkPmckTGC6G6YdzzCrg&s=10">
            <h3>AMD Radeon RX <br> 6600</h3>
            <p>R$ 5.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSLioLw7xIBSeTYa3fNJg40YQZZZVzccaDLvc0D0Bqfw&s=10">
            <h3>NVIDIA GeForce RTX 3060 (12 GB)</h3>
            <p>R$ 5.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZPVJNDytRHkWMGD4sU1RAKcAWkpIoq6clBIM-vv-bQA&s">
            <h3>AMD Radeon RX 6600</h3>
            <p>R$ 7.500.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBQGNpWlNyLyXlcGUbp5Z-LB2hMmpC4Kk8da_lBq2gJA&s=10">
            <h3>Intel <br> Arc <br> A580</h3>
            <p>R$ 3.200.00</p>
            <button>Comprar</button>
          </div>

            <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxAdIjOFmXDTtCDUeer7AcSd7csybRFHWJzuPBd5o1rQ&s=10">
            <h3>AMD Radeon RX 7800 <br> XT</h3>
            <p>R$ 3.000.00</p>
            <button>Comprar</button>
          </div>
        </div>
      </section>

    <hr>

      <section id="Hardware">
        <h2>ＨＡＲＤＷＡＲＥ</h2>

        <div class="container-cards">

         
           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxAoIyIaTUec2ytKZFxbr6OrMgM1ghFGJnH8vfPJK8UQ&s=10">
            <h3>AMD <br> Ryzen 7 <br> 9800X3D</h3>
            <p>R$ 1.200.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZK8THZUgdN5IVc_0jMBIbYZXqia3v0yKl9HzWnIPrRw&s=10">
            <h3>Intel Core Ultra 7 270K <br> Plus</h3>
            <p>R$ 1.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvg1oARXh6iez5KDUM1igYp2dah9m1VVZ8P7rHB0o8tQ&s=10">
            <h3>AMD <br> Ryzen 5 <br> 7600</h3>
            <p>R$ 1.100.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSScSePgMtGEWhiTt_HxOVvXzMnp_a7xhFuH8ydIpS18g&s=10">
            <h3>AMD <br> Ryzen 9 <br> 9950X3D</h3>
            <p>R$ 900.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyBkLeP9gr-UGSaEQyxpuZvBproKSMRnmEf0YFg9ZqZg&s=10">
            <h3>Asus ROG Strix Scope II 96 Wireless</h3>
            <p>R$ 700.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBXz8MNW-6GBMcEJeDsFoF6rNBBiEDAmxnTjdtn9nHxA&s">
            <h3>Wooting <br> 60HE <br> v2</h3>
            <p>R$ 2.500.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSS8zUtevBTCDnL7guJOEepWtKgwRFaGwP6oH3ZVDLs0w&s">
            <h3>Logitech <br> MX <br> Keys S</h3>
            <p>R$ 1.400.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIQrEdgKksqXuT0TV7PCvgezL9WjkRGVk6OUFtxyrGJw&s=10">
            <h3>AULA F99</h3>
            <p>R$ 500.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJMzO7by5Qag1Zd275DPgnqze61sWM7nG__B6i77Cikw&s=10">
            <h3>ASUS ROG Swift OLED PG27UCDM</h3>
            <p>R$ 5.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSOC2zaiaUe17VnQy-mlJBll_dFFy2i5nQfeU-ceV48Q&s=10">
            <h3>Dell <br> Alienware <br> AW3425DW</h3>
            <p>R$ 7.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVz6ODb42YBTYAXoCX3P9nWQip01zTsRpvfZrk4R8xVA&s=10">
            <h3> ASUS ProArt Display 6K PA32QCV</h3>
            <p>R$ 8.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3LnKZYLVXx1SixixYZS6psGWRzMQTog-ajt97u1ULpQ&s=10">
            <h3>LG <br> UltraGear <br> 24GS60F-B</h3>
            <p>R$ 700.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjSCXwcOeqbKj4ZTrNmy8V88erQEkPuHuF8Cik7Vaz6w&s=10">
            <h3>Logitech G <br> Pro X <br> Superlight 2</h3>
            <p>R$ 700.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYbETPU9_WkeJE2LBV_ulj2sXVBnKw2CRPJTTf7oCKtA&s=10">
            <h3> Razer <br> DeathAdder <br> V3 Pro</h3>
            <p>R$ 500.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOkeHIAB7Whc5EtmCQXj4uv4KZ1GMnS1Xk1hehXIrewg&s">
            <h3>Logitech <br> MX Master <br> 3S</h3>
            <p>R$ 670.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRfxtVax0X6AxM3lveqXTK7u1_Bq3_CQcMkjJFyXZEUQ&s">
            <h3>Attack <br> Shark <br> X3</h3>
            <p>R$ 500.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0x8Kc000RszmL5JoH7ybVLFcHjsNYogbw3viHUNLvBA&s=10">
            <h3> MSI <br> MAG <br> A850GL</h3>
            <p>R$ 800.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6gVG6ZxwfMVM0uGh23ie1jFAsrzw3a7MF_DDbzD7h1g&s=10">
            <h3>Corsair <br> RM1000x <br> SHIFT</h3>
            <p>R$ 1.300.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVRTBbDo0bgxjr8pEMHSuIA0_tOs1WEyDQ0kiWssRmRQ&s=10">
            <h3>Cooler Master MWE Gold 750 V3</h3>
            <p>R$ 650.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS759nYhOCTtRHR3qF7_g4y0TjLwn5FX5NYpg_SQ47CAQ&s">
            <h3>XPG Core <br> Reactor <br> II 750W</h3>
            <p>R$ 700.00</p>
            <button>Comprar</button>

        </div>
      </section>

    <hr>

      <section id="CELULARES">
        <h2>ＣＥＬＵＬＡＲＥＳ</h2>

        <div class="container-cards">
          
          <div class="card">
            <img src="data:image/jpeg;base64,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">
            <h3>IPHONE 17</h3>
            <p>R$ 7.600.00</p>
            <button>Comprar</button>
          </div>

          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQ6wDMBtbIeSB8fNFLwUK6A6-PqOowivk-ybyfBduO3g&s">
            <h3>Sansung S22</h3>
            <p>R$ 2.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuwiLBH5HX7dB1q6PMqQIK0mjlbY0ecaMLsL8edXtH2w&s">
            <h3>poco x8 pro</h3>
            <p>R$ 2.400.60</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeD9KVRutYAm5XMwkCf1PtP9MKqAhf7xVRBjrUbYTsOw&s=10">
            <h3>Motorola Razr 60 Ultra</h3>
            <p>R$ 7.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS3xMKb4DqWCStuRcWhfsOBvLHjei1E9c7owk-dxSLjrQ&s">
            <h3>Samsung Galaxy S26 Ultra</h3>
            <p>R$ 10.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBDg5lGgmxqDIFxKsQocthrijQ27EHsgkWEba0xCSmBg&s=10">
            <h3>Samsung Galaxy S25 FE</h3>
            <p>R$ 5.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOnoxTh2XB8OOUxRTCNHQZDh9GyKKoLJ9Sm3w3CwYmIg&s=10">
            <h3>iPhone 15 Pro Max</h3>
            <p>R$ 4.700.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWZz0kv-xfQwqj_7Fhhd7SAnkApZV_c1ellVLPWoKhHA&s=10">
            <h3>iPhone 16 Pro Max</h3>
            <p>R$ 6.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4L4gu_-oRoGlQ_uE2oqxdmtQ9BcdKOrI2xUDyNUF8vg&s=10">
            <h3>Xiaomi 16 Ultra</h3>
            <p>R$ 4.500.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGfCVqI2AHgZknAJonmGkUE2IqTGh-jpTogvvf1AwTIw&s=10">
            <h3>Xiaomi 17T Pro</h3>
            <p>R$ 4.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTeKqz4xd91adTOnl7P5KGLYriTSCmVxBYgcqoD8a7rAg&s=10">
            <h3>Motorola Signature 5G</h3>
            <p>R$ 7.700.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQlRtvSm508BU5wFCbOMxkk6GcaRSM2APYhS0ss0aD1qQ&s=10">
            <h3> POCO X6 Pro 5G</h3>
            <p>R$ 3.500.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQWA2bt2_yrTnK4FJC-x724uNKNUJtQnUHHOZLn5ns_zQ&s">
            <h3> Moto G86 5G</h3>
            <p>R$ 4.600.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR5e10Bxq8jK-Ah6QQo8-AhW3bN4G_1-5vKWa_bXgYPUg&s=10">
            <h3>Motorola Edge 60 Pro</h3>
            <p>R$ 3.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcT3vIYaiWfbGpHH3mSUvCgwVDl6-4kqlVH39Z2gXyoad_XHvyZMMnn4rniEsiHAGeZw96XitGofbY5tI0a6kcJtB54_OZKvlX5mGvJ1R9WZPvMRRVuZOTCDEOAM7kTrhHpNZPJcs41C6g&usqp=CAc">
            <h3>iPhone 17 Pro Max</h3>
            <p>R$ 12.000.00</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRV5x3hDfwkiZ4Ky8CR_rpO71Ns0bzSjr1P1HsopXGmHA&s=10">
            <h3> Samsung Galaxy A56</h3>
            <p>R$ 2.600.00</p>
            <button>Comprar</button>
          </div>



        </div>
      </section>

    <hr>

      <section id="JOGOS">
        <h2>ＪＯＧＯＳ</h2>

        <div class="container-cards">
          
          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGF0xMsIjMhdqcfStk-hY8QezQEkIijMF9Ia0_KQff-A&s=10">
            <h3>Grand Theft Auto VI</h3>
            <p>R$ 400</p>
            <button>Comprar</button>
          </div>

          <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSirwsHzzCShA3Be6M9sLeqTawjqFof-XEMa79bc6y-VA&s=10">
            <h3>Elden Ring</h3>
            <p>R$ 250</p>
            <button>Comprar</button>
          </div>


           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOEpdIjVu5ii_iDBpVK7ri6nOviN9a3dZVPtQxDa1xsQ&s=10">
            <h3>Borderlands</h3>
            <p>R$ 76</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu_U-cJ_fInm_P6I1lI099Zmp6Y9lG4bSw1w23D2AV6Q&s=10">
            <h3>Counter-Strike 2</h3>
            <p>R$ 50</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7R3n35Bfn9KDZkLMan3yHSOZYotpUGzbm5GfxyPvWUQ&s=10">
            <h3>Resident Evil 4 (Remake)</h3>
            <p>R$ 104</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="data:image/jpeg;base64,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">
            <h3>lethal company</h3>
            <p>R$ 33</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJdqqe9Sz1Rxro_KGyLsAtpbNXGy1j1AUamnpc5bDsAA&s=10">
            <h3>Apex <br> Legends</h3>
            <p>R$ 62</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqi9L3h5_J9pKCQ4c9gayJ7_RAqgYEX-NcRcmLYmYu3Q&s=10">
            <h3>Uncharted: Legacy of Thieve</h3>
            <p>R$ 100</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm341XQrt8zpRW7j5_nsGnp_OnQUXO7aP0BsPrdML3_Q&s=10">
            <h3>R.E.P.O</h3>
            <p>R$ 18</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6rqWc1WwhLnl_Sq2GP1A5WFgilKCofRE8y8seiwwt-g&s=10">
            <h3>Cyberpunk 2077</h3>
            <p>R$ 38</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://m.media-amazon.com/images/I/9172l77gmRL.jpg">
            <h3>Red Dead Redemption 2</h3>
            <p>R$ 98</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLY6T24YS8TCTqUU1BIaEPdDkL1k8a98Y19jKasOD_nw&s=10">
            <h3>The Last of Us Part I / Part II</h3>
            <p>R$ 298</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRN3ULh43SbpP5dreylxZQLdnsvJ-oqNwR6s4xJPL7rkw&s=10">
            <h3>The Witcher 3: Wild Hunt</h3>
            <p>R$ 190</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSX0rKp4DouCmvZYMvc8IyE1K2Zu8NpRcwnzT7d3Kevg&s=10">
            <h3>Baldur's Gate 3</h3>
            <p>R$ 67</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTvgtfilb8jEpBU-YW_I5tRWZZfpboyiAETsF6eGBzS2w&s=10">
            <h3>Call of Duty: Warzone </h3>
            <p>R$ 40</p>
            <button>Comprar</button>
          </div>

           <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSU8UnZiQsW8Nc10e8LO9uA6olrCjvJCBy4bjW8ByrSRQ&s=10">
            <h3>Diablo IV</h3>
            <p>R$ 78</p>
            <button>Comprar</button>
          </div>
        </div>
      </section>



    <footer>
      <h4>Nosso Time, especialmente o Emanuel, sempre esta disposto, e caso não compre 1 produto, o nosso atendente emanuel, irá fazer uma visita em sua casa, tentando descobrir qual e o motivo :D </h4>
    </footer>
    
  </body>
</html>