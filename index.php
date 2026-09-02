<?php require "_shared/header.php"; ?>
<main>
  <section class="py-5 bg-light" id="home">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold">Learn Bootstrap with a Beautiful Starter Page</h1>
          <p class="lead text-muted">
            This starter template includes Bootstrap utilities, cards, forms, and responsive layout so you can build modern pages quickly.
          </p>
          <div class="d-grid d-sm-flex gap-2">
            <a href="#examples" class="btn btn-primary btn-lg px-4 me-sm-3">View Components</a>
            <a href="#contact" class="btn btn-outline-secondary btn-lg px-4">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 text-center mt-4 mt-lg-0">
          <div class="ratio ratio-16x9 rounded shadow-sm overflow-hidden">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=80" alt="Course illustration" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5" id="features">
    <div class="container">
      <div class="text-center mb-5">
        <h2>Bootstrap Components Included</h2>
        <p class="text-muted">A modern landing page structure with responsive utilities and example components.</p>
      </div>

      <div class="row g-4">
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Responsive Grid</h5>
              <p class="card-text">Easily build mobile-first layouts with Bootstrap's grid system.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Navigation</h5>
              <p class="card-text">Create accessible navbars, sidebars, and dropdown menus quickly.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Cards &amp; Media</h5>
              <p class="card-text">Use cards to present text, images, and actions in a neat container.</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Forms &amp; Buttons</h5>
              <p class="card-text">Build stylish forms with validation, input groups, and button variations.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5 bg-light" id="examples">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-4">
          <div class="card h-100">
            <img src="https://images.unsplash.com/photo-1512453979798-5ea266f8880c?auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Example card image">
            <div class="card-body">
              <h5 class="card-title">Card example</h5>
              <p class="card-text">Bootstrap cards are flexible content containers with multiple variants for layout and media.</p>
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100 border-primary">
            <div class="card-body text-center">
              <h5 class="card-title">Stylish button group</h5>
              <p class="card-text">Use responsive button groups and utility spacing to align actions.</p>
              <div class="btn-group" role="group" aria-label="Example button group">
                <button type="button" class="btn btn-outline-primary">Left</button>
                <button type="button" class="btn btn-outline-primary">Middle</button>
                <button type="button" class="btn btn-outline-primary">Right</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Form example</h5>
              <p class="card-text">Forms are simple to build with spacing, labels, selects, and validation styles.</p>
              <form>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="exampleSelect" class="form-label">Choose course</label>
                  <select class="form-select" id="exampleSelect">
                    <option selected>Beginner</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-4 mt-4">
        <div class="col-lg-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Course schedule table</h5>
              <p class="text-muted">Tables help organize information cleanly for students and schedules.</p>
              <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                  <thead class="table-light">
                    <tr>
                      <th scope="col">Day</th>
                      <th scope="col">Topic</th>
                      <th scope="col">Duration</th>
                      <th scope="col">Level</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Monday</td>
                      <td>Bootstrap Grid & Layout</td>
                      <td>90 min</td>
                      <td><span class="badge bg-success">Beginner</span></td>
                    </tr>
                    <tr>
                      <td>Wednesday</td>
                      <td>Components & Utilities</td>
                      <td>90 min</td>
                      <td><span class="badge bg-primary">Intermediate</span></td>
                    </tr>
                    <tr>
                      <td>Friday</td>
                      <td>Forms, Modals & Interactions</td>
                      <td>90 min</td>
                      <td><span class="badge bg-warning text-dark">Advanced</span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Accordion new task</h5>
              <p class="text-muted">Accordions are great for collapsing course details and FAQs.</p>
              <div class="accordion" id="courseAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What will students learn?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#courseAccordion">
                    <div class="accordion-body">
                      Students will learn responsive design, Bootstrap components, utility classes, and practical UI patterns.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How do I use the starter template?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#courseAccordion">
                    <div class="accordion-body">
                      Copy the HTML, update the content, and replace or extend the components to build your own Bootstrap-based pages.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Can I customize the styles?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#courseAccordion">
                    <div class="accordion-body">
                      Yes, you can add custom CSS or override Bootstrap styles using your own stylesheet loaded after `bootstrap.min.css`.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5" id="contact">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <h2>Ready to teach Bootstrap?</h2>
          <p class="text-muted">Use this starter page to show students how components, layouts, and utilities work together.</p>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Responsive layout with grid columns</li>
            <li class="list-group-item">Navbar, cards, and image utilities</li>
            <li class="list-group-item">Form controls and button groups</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Stay connected</h5>
              <p class="card-text">Join the class and share your Bootstrap progress with your students.</p>
              <form>
                <div class="mb-3">
                  <label for="contactName" class="form-label">Name</label>
                  <input type="text" class="form-control" id="contactName" placeholder="Your name">
                </div>
                <div class="mb-3">
                  <label for="contactEmail" class="form-label">Email</label>
                  <input type="email" class="form-control" id="contactEmail" placeholder="you@example.com">
                </div>
                <div class="mb-3">
                  <label for="contactMessage" class="form-label">Message</label>
                  <textarea class="form-control" id="contactMessage" rows="3" placeholder="Tell us more"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send Message</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require "_shared/footer.php"; ?>