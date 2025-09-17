 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="icon" href="images/logo.png" type="image/x-icon">

     <style>
         #top-padding {
             padding-top: 200px;
         }

         .page_content_wrap {
             max-width: 1200px;
             margin: 0 auto;
             padding: 20px;
         }

         .content {
             /* padding: 30px; */
             /* display: flex;
             justify-content: center;
             align-items: center;
		 
			 flex-wrap: wrap; */ 
 
         }



         .filter-buttons {
             display: flex;
             justify-content: center;
             flex-wrap: wrap;
             margin-bottom: 30px;
             gap: 10px;
         }

         .filter-btn {
             padding: 10px 20px;
             /* background: #0080ff; */
             border: none;
             border-radius: 30px;
             cursor: pointer;
             transition: all 0.3s ease;
             font-weight: 500;
         }

         .filter-btn:hover,
         .filter-btn.active {
             background: #e91e63;
             color: white;
         }

         .myportfolio-container {
             width: 100%;
         }

         .esg-grid {
             width: 100%;
         }

         .esg-grid ul {
             display: grid;
             grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
             gap: 25px;
             list-style: none;
         }

         .esg-media-cover-wrapper {
             position: relative;
             border-radius: 8px;
             overflow: hidden;
             box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
             transition: transform 0.3s ease;
         }

         .esg-media-cover-wrapper:hover {
             transform: translateY(-5px);
         }

         .esg-entry-media {
             width: 100%;
             height: 250px;
             overflow: hidden;
         }

         .esg-entry-media img {
             width: 100%;
             height: 100%;
             object-fit: cover;
             transition: transform 0.5s ease;
         }

         .esg-media-cover-wrapper:hover .esg-entry-media img {
             transform: scale(1.1);
         }

         .esg-entry-cover {
             position: absolute;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background: rgba(0, 0, 0, 0.6);
             display: flex;
             align-items: center;
             justify-content: center;
             opacity: 0;
             transition: opacity 0.3s ease;
             z-index: 1500;
         }

         .esg-media-cover-wrapper:hover .esg-entry-cover {
             opacity: 1;
         }

         .esg-center a {
             display: inline-flex;
             align-items: center;
             justify-content: center;
             width: 60px;
             height: 60px;
             background: white;
             color: #2980b9;
             border-radius: 50%;
             font-size: 20px;
             text-decoration: none;
             transition: all 0.3s ease;
         }

         .esg-center a:hover {
             background: #2c3e50;
             color: white;
             transform: scale(1.1);
         }

         .image-title {
             position: absolute;
             bottom: 0;
             left: 0;
             width: 100%;
             background: rgba(0, 0, 0, 0.7);
             color: white;
             padding: 15px;
             transform: translateY(100%);
             transition: transform 0.3s ease;
             z-index: 1500;
         }

         .esg-media-cover-wrapper:hover .image-title {
             transform: translateY(0);
         }

         .clear {
             clear: both;
         }

         @media (max-width: 1135px) {
             #top-padding {
                 padding-top: 0;
             }
         }

         @media (max-width: 768px) {
             .esg-grid ul {
                 grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                 gap: 15px;
             }

             .filter-buttons {
                 flex-direction: column;
                 align-items: center;
             }

             .filter-btn {
                 width: 80%;
                 margin-bottom: 10px;
             }
         }

         .portfolio-intro {
             text-align: center;
             max-width: 800px;
             margin: 0 auto 40px;
             padding: 0 20px;
         }

         .portfolio-intro p {
             font-size: 1.1rem;
             color: #555;
         }
		 @media (max-width: 478px) {
			 .content {
			display: flex;
			 justify-content: center;
			 align-items: center;
		 
			 flex-wrap: wrap;
		 }
		 }
     </style>
 </head>

 <body>
     @extends('main')
     @section('title','Gallery')
     @section('content')
 

         <div class="page_content_wrap page_paddings_yes" id="top-padding">
             <div class="content_wrap">
                 <div class="content">
                     <article
                         class="itemscope post_item post_item_single post_featured_default post_format_standard post-401 page type-page hentry">
                         <section class="post_content" itemprop="articleBody">
                             <!-- Filter buttons -->
                             <div class="filter-buttons">
                                 <button class="filter-btn active" data-filter="all">All</button>
                                 <button class="filter-btn" data-filter="chamber-ensembles">name</button>
                                 <button class="filter-btn" data-filter="jazz-ensembles">name</button>
                                 <button class="filter-btn" data-filter="music-technology">name</button>
                                 <button class="filter-btn" data-filter="piano-classes">name</button>
                                 <button class="filter-btn" data-filter="voice">name</button>
                                 <button class="filter-btn" data-filter="kids">name</button>
                             </div>

                             <article class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">
                                 <div id="esg-grid-1-1" class="esg-grid">
                                     <ul>
                                         <li class="filterall filter-chamber-ensembles filter-music-technology filter-voice filter-group filter-kids eg-melody-wrapper eg-post-id-163"
                                             data-date="1451995244">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img src="https://images.unsplash.com/photo-1511735111819-9a3f7709049c?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                         alt="Viola and Composition">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-163 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-163 esgbox"
                                                             href="https://images.unsplash.com/photo-1511735111819-9a3f7709049c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">Viola and Composition departments collaborate</div> --}}
                                             </div>
                                         </li>
                                         <li class="filterall filter-jazz-ensembles filter-piano-classes filter-voice filter-kids filter-private-lessons eg-melody-wrapper eg-post-id-174"
                                             data-date="1454674121">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img src="https://images.unsplash.com/photo-1507838153414-b4b713384a76?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                         alt="World's best symphonies">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-174 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-174 esgbox"
                                                             href="https://images.unsplash.com/photo-1507838153414-b4b713384a76?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">Top List of World's best symphonies</div> --}}
                                             </div>
                                         </li>
                                         <li class="filterall filter-jazz-ensembles filter-musicianship filter-orchestra filter-teenagers eg-melody-wrapper eg-post-id-169"
                                             data-date="1457179421">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                         alt="Music Therapy">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-169 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-169 esgbox"
                                                             href="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">Music Therapy: career and salary overview</div> --}}
                                             </div>
                                         </li>
                                         <li class="filterall filter-jazz-ensembles filter-musicianship filter-group filter-orchestra filter-teenagers eg-melody-wrapper eg-post-id-189"
                                             data-date="1459859385">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                         alt="School of Music concert">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-189 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-189 esgbox"
                                                             href="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">Featuring School of Music in a concert</div> --}}
                                             </div>
                                         </li>
                                         <li class="filterall filter-chamber-ensembles filter-music-technology filter-kids filter-private-lessons eg-melody-wrapper eg-post-id-186"
                                             data-date="1462451422">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img src="https://images.unsplash.com/photo-1494232410401-ad00d5433cfa?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                         alt="Double bass performances">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-186 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-186 esgbox"
                                                             href="https://images.unsplash.com/photo-1494232410401-ad00d5433cfa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">The Best Double bass performances</div> --}}
                                             </div>
                                         </li>
                                         <li class="filterall filter-chamber-ensembles filter-voice filter-group filter-orchestra eg-melody-wrapper eg-post-id-195"
                                             data-date="1462451554">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img src="https://images.unsplash.com/photo-1507745386524-6a80b5237913?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                         alt="Western Concert flute">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-195 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-195 esgbox"
                                                             href="https://images.unsplash.com/photo-1507745386524-6a80b5237913?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">Western Concert flute</div> --}}
                                             </div>
                                         </li>
                                         <li class="filterall filter-music-technology filter-piano-classes filter-kids filter-teenagers eg-melody-wrapper eg-post-id-198"
                                             data-date="1462451627">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img src="https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                         alt="Festival of Flutes">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-198 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-198 esgbox"
                                                             href="https://images.unsplash.com/photo-1511379938547-c1f69419868d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">Festival of Flutes</div> --}}
                                             </div>
                                         </li>
                                         <li class="filterall filter-chamber-ensembles filter-musicianship filter-voice filter-group filter-teenagers eg-melody-wrapper eg-post-id-201"
                                             data-date="1462451665">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img src="https://images.unsplash.com/photo-1516280440614-37939bbacd81?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                                         alt="Columbia Kids Week">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-201 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-201 esgbox"
                                                             href="https://images.unsplash.com/photo-1516280440614-37939bbacd81?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">Columbia Kids Week</div> --}}
                                             </div>
                                         </li>
                                         <li class="filterall filter-jazz-ensembles filter-music-technology filter-piano-classes filter-kids filter-orchestra filter-private-lessons eg-melody-wrapper eg-post-id-203"
                                             data-date="1462451716">
                                             <div class="esg-media-cover-wrapper">
                                                 <div class="esg-entry-media">
                                                     <img
                                                         src="https://images.unsplash.com/photo-1465847899084-d164df4dedc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80">
                                                 </div>
                                                 <div class="esg-entry-cover esg-fade" data-delay="0">
                                                     <div class="esg-overlay esg-fade eg-melody-container" data-delay="0">
                                                     </div>
                                                     <div class="esg-center eg-post-203 eg-melody-element-0-a esg-falldown"
                                                         data-delay="0.1">
                                                         <a class="eg-melody-element-0 eg-post-203 esgbox"
                                                             href="https://images.unsplash.com/photo-1465847899084-d164df4dedc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80">
                                                             <i class="fa fa-search"></i>
                                                         </a>
                                                     </div>
                                                 </div>
                                                 {{-- <div class="image-title">International Piano Festival</div> --}}
                                             </div>
                                         </li>
                                     </ul>
                                 </div>
                             </article>
                             <div class="clear"></div>
                         </section>
                     </article>
                     <section class="related_wrap related_wrap_empty"></section>
                 </div>
             </div>
         </div>

         <script>
             // Filter functionality
             document.addEventListener('DOMContentLoaded', function() {
                 const filterButtons = document.querySelectorAll('.filter-btn');
                 const portfolioItems = document.querySelectorAll('.esg-grid ul li');

                 filterButtons.forEach(button => {
                     button.addEventListener('click', function() {
                         // Remove active class from all buttons
                         filterButtons.forEach(btn => btn.classList.remove('active'));

                         // Add active class to clicked button
                         this.classList.add('active');

                         const filterValue = this.getAttribute('data-filter');

                         portfolioItems.forEach(item => {
                             if (filterValue === 'all') {
                                 item.style.display = 'block';
                             } else {
                                 if (item.classList.contains('filter-' + filterValue)) {
                                     item.style.display = 'block';
                                 } else {
                                     item.style.display = 'none';
                                 }
                             }
                         });
                     });
                 });

                 // Lightbox functionality (simplified)
                 const lightboxLinks = document.querySelectorAll('.esgbox');

                 lightboxLinks.forEach(link => {
                     link.addEventListener('click', function(e) {
                         e.preventDefault();
                         const imgUrl = this.getAttribute('href');
                         const title = this.getAttribute('lgtitle');

                         // Create lightbox overlay
                         const lightbox = document.createElement('div');
                         lightbox.style.position = 'fixed';
                         lightbox.style.top = '0';
                         lightbox.style.left = '0';
                         lightbox.style.width = '100%';
                         lightbox.style.height = '100%';
                         lightbox.style.backgroundColor = 'rgba(0, 0, 0, 0.9)';
                         lightbox.style.display = 'flex';
                         lightbox.style.alignItems = 'center';
                         lightbox.style.justifyContent = 'center';
                         lightbox.style.zIndex = '1000000';
                         lightbox.style.cursor = 'pointer';

                         // Create image element
                         const img = document.createElement('img');
                         img.src = imgUrl;
                         img.style.maxWidth = '90%';
                         img.style.maxHeight = '90%';
                         img.style.objectFit = 'contain';

                         // Create title element
                         const titleEl = document.createElement('div');
                         titleEl.textContent = title;
                         titleEl.style.position = 'absolute';
                         titleEl.style.bottom = '20px';
                         titleEl.style.left = '50%';
                         titleEl.style.transform = 'translateX(-50%)';
                         titleEl.style.color = 'white';
                         titleEl.style.fontSize = '1.2rem';
                         titleEl.style.textAlign = 'center';
                         titleEl.style.padding = '10px 20px';
                         titleEl.style.backgroundColor = 'rgba(0, 0, 0, 0.7)';
                         titleEl.style.borderRadius = '5px';

                         lightbox.appendChild(img);
                         lightbox.appendChild(titleEl);
                         document.body.appendChild(lightbox);

                         // Close lightbox on click
                         lightbox.addEventListener('click', function() {
                             document.body.removeChild(lightbox);
                         });
                     });
                 });
             });
         </script>
     @endsection
