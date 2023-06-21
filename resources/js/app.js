import './bootstrap';


if (document.querySelector('#scroll-text')) {
    window.addEventListener('scroll', () => {
        if (window.scrollY > 25) {
            document.querySelector('#scroll-text').style.opacity = 0;
            document.querySelector('#scroll-text').style.transform = 'translateY(-25%)';
        } else {
            document.querySelector('#scroll-text').style.opacity = 1;
            document.querySelector('#scroll-text').style.transform = 'translateY(0)';
        }
    });
}


const mobileMenu = document.getElementById('mobile-menu');
const hamburgerBtn = document.getElementById('hamburger-btn');
const hamburgerLines = hamburgerBtn.querySelectorAll('.hamburger-line');


hamburgerBtn.addEventListener('click', function() {
    mobileMenu.classList.toggle('hidden');
    hamburgerBtn.classList.toggle('active');

    hamburgerLines.forEach(line => line.classList.toggle('active'));
});

function getDiensten() {
    fetch("https://api-eu-central-1-shared-euc1-02.hygraph.com/v2/clj187jrp1bfx01uq9b9yb8rb/master", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        query: `
          query Diensten {
            diensten {
              id
              naam
              image {
                url
              }
            }
          }
        `,
      }),
    })
      .then((res) => res.json())
      .then((data) => {
        // Handle the response data here
        console.log(data.data.diensten);
      })
      .catch((error) => {
        // Handle any errors that occur during the fetch request
        console.error(error);
      });
  }
  
getDiensten();