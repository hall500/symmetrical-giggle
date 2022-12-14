<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Landing Page - Freecode Camp</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="header">
        <img src="https://s3-us-west-2.amazonaws.com/pcw-uploads/logos/goolrc-promo-codes-coupons.jpeg" alt="Manufacturer logo" id="header-img">
        <nav id="nav-bar">
            <a href="#features" class="nav-link active">Features</a>
            <a href="#package" class="nav-link">Package Info</a>
            <a href="#pricing" class="nav-link">Pricing</a>
        </nav>
    </header>

    <main>
        <section id="about">
            <div>
            <p>GoolRC SG900 RC Drone with Camera 4K 22mins Flight Time RC Quadcopter Optical Flow Positioning Gesture Photo Video Image Follow Altitude Hold Drone</p>
            <a href="./pay">Buy Now</a>
            </div>
            <iframe id="video" src="https://www.youtube.com/embed/_7wWHFvSxjk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </section>

        <section id="brand">
            <h3>About GoolRC</h3>
            <p>GoolRC is an enterprise brand focusing on games and toys. It provides countless high-quality products and high-quality after-sales service for all countries in the world. It is welcomed and loved by countless customers. We always adhere to the principle of products and services, create products we all like, and become a great brand recognized by everyone.</p>
            <button>Buy Now</button>
        </section>

        <h3 class="heading">Features</h3>

        <section id="features">
            <div class="card">
                <h3 class="title">Real-Time Viewing</h3>
                <p class="description">
                    You can fully control and watch the aerail picture of the aircraft, affecting the clearness of the returen, allowing you to have the migratory bird vision and easily record everything.
                </p>
            </div>

            <div class="card">
                <h3 class="title">Optical Flow Position</h3>
                <p class="description">
                    The combination of precise location by the vision position system and position hold by the optical flow positioning brings on a stable hovering for aerial shooting.
                </p>
            </div>

            <div class="card">
                <h3 class="title">Gravity Sensor</h3>
                <p class="description">
                    Open the gravity sensing mode, perform gravity sensing to control the drone, and experience the felling of flying the drone more deeply.
                </p>
            </div>

            <div class="card">
                <h3 class="title">Trajectory Flight</h3>
                <p class="description">
                    With the function, draw a trajectory flight in the frame on the right of the screen, and the aircrft will fly according to this trajectory.
                </p>
            </div>

            <div class="card">
                <h3 class="title">Portrait Follow</h3>
                <p class="description">Simple tap on your device and the SG106 will fly with the target you specified.</p>
            </div>

            <div class="card">
                <h3 class="title">Gesture Auto-Photo</h3>
                <p class="description">
                    When you do hand gesture in the front of the aircraft within 2 meters, it will automatically take pictures and record videos, very interesting.
                </p>
            </div>
        </section>

        <section id="package">
            <h3 class="heading">Package Information</h3>
            <p><span  class="desc">Size: </span class="val"> <span>33 * 21.5 * 9cm / 13 * 8.5 * 3.5in</span></p>
            <p><span class="desc">Weight: </span> <span class="val">508g</span></p>

            <h3>Package List</h3>
            <ul>
                <li>Remote controller <span>1</span></li>
                <li>Battery (optional) <span>1/2</span></li>
                <li>Propeller protector <span>4</span></li>
                <li>Spare propeller <span>4</span></li>
                <li>Landing Gear <span>2</span></li>
                <li>USB Charge Cable <span>1</span></li>
                <li>Screw Driver and Toolset <span>1</span></li>
                <li>User Manual <span>1</span></li>
            </ul>
        </section>

        <div class="clear"></div>

        <section id="pricing">
            <h3 class="heading">Price</h3>
            <p class="price">$78.99</p>
            <a href="https://www.amazon.com/dp/B07W8GSDXQ/ref=dp_prsubs_2" target="_blank">Buy Now</a>
        </section>

        <section id="footer">
            <h3>Subscribe to our Mailing List</h3>
            <form id="form" action="https://www.freecodecamp.com/email-submit">
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                <input type="submit" id="submit" value="Subscribe">
            </form>
        </section>
    </main>
</body>
</html>