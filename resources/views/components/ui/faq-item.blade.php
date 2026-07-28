@props(['question'])

@php
  $faqId = 'faq-'.Str::slug($question);
@endphp

<article class="faq-item">
  <button
    id="{{ $faqId }}-button"
    class="faq-question"
    type="button"
    aria-expanded="false"
    aria-controls="{{ $faqId }}-answer"
  >
    <span>{{ $question }}</span>
    <span aria-hidden="true">+</span>
  </button>
  <div
    id="{{ $faqId }}-answer"
    class="faq-answer"
    role="region"
    aria-labelledby="{{ $faqId }}-button"
  >
    <div class="faq-answer-inner">{{ $slot }}</div>
  </div>
</article>
