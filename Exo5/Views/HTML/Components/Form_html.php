<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 me-5 container-form">
      <h1 class="mb-5 d-flex justify-content-evenly info-title-font form-title">
        Contact the administrator<span class="title-emoji-anim">👇</span>
      </h1>

      <form method="GET" action="index.php" class="px-sm-4" novalidate>
        <!-- Firstname -->
        <div class="form-group mt-3">
          <input type="text" name="firstname" id="firstname" class="form-control" required />
          <label class="mb-1 info-text-font form-title-input" for="firstname">Firstname</label>
        </div>
        <!-- password -->
        <div class="form-group mt-3">
          <input type="password" name="password" id="password" class="form-control" required />
          <label class="mb-1 info-text-font form-title-input" for="password">Password
          </label>
        </div>

        <!-- Email -->
        <div class="form-group mt-3">
          <input type="email" name="email" id="email" class="form-control" required />
          <label class="mb-1 info-text-font form-title-input" for="email">E-mail</label>
        </div>
        <!-- Message -->
        <div class="form-group">
          <textarea name="message" class="form-control" placeholder="Leave your comment here" id="textarea" style="height: 100px"
            maxlength="300" minlength="5"></textarea>
          <div id="textarea-counter-anchor" class="d-flex justify-content-end"></div>
        </div>
        <div class="d-flex justify-content-end">
          <button type="submit">
            <span>Send</span>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>