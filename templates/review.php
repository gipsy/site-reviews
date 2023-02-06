<?php defined('ABSPATH') || exit; ?>

<div class="glsr-review" id="review-{{ review_id }}" data-assigned='{{ assigned }}'>
  <div class="card col-md-12 mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <div class="card-img">
          {{ avatar }}
        </div>
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ title }}</h5>
          <div class="d-flex justify-content-between mb-3">
            {{ rating }} {{ date }}</div>
          <div class="links mb-3">{{ assigned_links }}</div>
          <div class="card-text mb-3">{{ content }}</div>
          <div class="author text-end mb-3">{{ author }} {{ verified }}</div>
          <div class="response">{{ response }}</div>
        </div>
      </div>
    </div>
  </div>
</div>
