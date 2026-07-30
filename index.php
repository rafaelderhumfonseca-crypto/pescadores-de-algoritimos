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
  </head>
  <body>

    <header>
      <!-- Bloco do usuário adicionado aqui -->
      <div class="usuario-topo">
        <span>👤 Olá, <strong><?php echo $_SESSION['usuario_nome']; ?></strong></span>
        <span>|</span>
        <a href="logout.php">Sair</a>
      </div>

      <h1>⚔️ 💎 𝗡𝗘𝗫𝗨𝗦 𝗦𝗧𝗢𝗥𝗘 💎 ⚔️</h1>
      <h5>Você só encontra tecnologia de qualidade na NEXUS STORE.</h5>
    </header>

    <nav>
      <a href="#Placas de video">|Placas de vídeos|</a>
      <a href="#Hardware">|Hardware|</a>
      <a href="#CELULARES">|Celulares|</a>
      <a href="#JOGOS">|Jogos|</a>
    </nav>

      <section id="Placas de video">
        <h2 style="text-align: center;">‖  【👾】ＰＬＡＣＡＳ ㅤ ＤＥ ㅤ ＶÍＤＥＯＳ【👾】  ‖</h2>

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
        <h2 style="text-align: center;">‖  【⚡】ＨＡＲＤＷＡＲＥ【⚡】  ‖</h2>

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
        <h2 style="text-align: center;">‖  【📱】ＣＥＬＵＬＡＲＥＳ【📱】  ‖</h2>

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
        <h2 style="text-align: center;">‖  【🎮】ＪＯＧＯＳ【🎮】  ‖</h2>

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
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSL1o1IqELZwec1Wqk-tIUtN8xnyzJxYwHM75sjo3R7Ng&s=10">
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