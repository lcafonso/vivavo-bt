@extends('layouts.master')


@section('customStyle')

<style type="text/css">

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

button {
  background: transparent;
  border: none;
  cursor: pointer;
  outline: none;
}


/* .section SECTION
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.section {
  background: #F45B69;
  padding: 10px 0;
}

.section .container {
	background: #f0f0f0;
  width: 90%;
  max-width: 900px;
  margin: 0 auto;
  text-align: center;
}

.section h1 {
  font-size: 2.5rem;
}

.section h2 {
  font-size: 1.3rem;
}


/* TIMELINE
–––––––––––––––––––––––––––––––––––––––––––––––––– */

.timeline {
	
  background: #f0f0f0;
  white-space: nowrap;
  overflow-x: hidden;
}

.timeline ol {

  font-size: 0;
  width: 100vw;
  padding: 200px 0;
  transition: all 1s;
}

.timeline ol li {
  position: relative;
  display: inline-block;
  list-style-type: none;
  width: 160px;
  height: 1px;
  background: url('img/dot.gif') 1px top repeat-x;
}

.timeline ol li:last-child {
  width: 280px;
}

.timeline ol li:not(:first-child) {
  margin-left: 14px;
}

.timeline ol li:not(:last-child)::after {
  content: '';
  position: absolute;
  top: 50%;
  left: calc(100% + 1px);
  bottom: 0;
  width: 12px;
  height: 12px;
  transform: translateY(-50%);
  border-radius: 50%;
  background: #bb9246;
}

.timeline ol li div {
  position: absolute;
  left: calc(100% + 7px);
  width: 280px;
  padding: 0px;
  font-size: .8rem;
  white-space: normal;
  color: black;
  background: linear-gradient(to right, white , transparent);
}
 
.timeline ol li div::before {
  content: '';
  position: absolute;
  top: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
}

.timeline ol li:nth-child(odd) div {
  top: -16px;
  transform: translateY(-100%);
}
 
.timeline ol li:nth-child(odd) div::before {
  top: 100%;
  border-width: 8px 8px 0 0;
  border-color: white transparent transparent transparent;
}

.timeline ol li:nth-child(even) div {
  top: calc(100% + 16px);
}
 
.timeline ol li:nth-child(even) div::before {
  top: -8px;
  border-width: 8px 0 0 8px;
  border-color: transparent transparent transparent white;
}

.timeline time {
  display: block;
  font-size: 0.9rem;
  font-weight: normal;
  font-style: italic;
}

.timeline title {
  display: block;
  font-size: 0.9rem;
  font-weight: bold;
  font-style: normal;
  margin-bottom: 8px;
}

/* TIMELINE ARROWS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.timeline .arrows {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}
 
.timeline .arrows .arrow__prev {
  margin-right: 20px;
}
 
.timeline .disabled {
  opacity: .5;
}
 
.timeline .arrows img {
  width: 25px;
  height: 25px;
}

/* GENERAL MEDIA QUERIES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (max-width: 599px) {
  .timeline ol,
  .timeline ol li {
    width: auto; 
  }
  
  .timeline ol {
    padding: 0;
    transform: none !important;
  }
  
  .timeline ol li {
    display: block;
    height: auto;
    background: transparent;
  }
  
  .timeline ol li:first-child {
    margin-top: 25px;
  }
  
  .timeline ol li:not(:first-child) {
    margin-left: auto;
  }
  
  .timeline ol li div {
    width: 94%;
    height: auto !important;
    margin: 0 auto 25px;
  }
  
  .timeline ol li div {
    position: static;
  }
  
  .timeline ol li:nth-child(odd) div {
    transform: none;
  }
  
  .timeline ol li:nth-child(odd) div::before,
  .timeline ol li:nth-child(even) div::before {
    left: 50%;
    top: 100%;
    transform: translateX(-50%);
    border: none;
    border-left: 1px solid white;
    height: 25px;
  }
  
  .timeline ol li:last-child,
  .timeline ol li:nth-last-child(2) div::before,
  .timeline ol li:not(:last-child)::after,
  .timeline .arrows {
    display: none;
  }
}

</style>

@endsection


@section('content')


	
<div class="container">	
<section class="timeline">

  <ol>
    <li>
      <div>
        <time>1934</time> <title>At vero eos et accusamus</title> et iusto odio dignissimos ducimus qui blanditiis praesentium At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
      </div>
    </li>
    <li>
      <div>
        <time>1937</time> <title>Proin quam velit</title> efficitur vel neque vitae, rhoncus commodo mi. Suspendisse finibus mauris et bibendum molestie. Aenean ex augue, varius et pulvinar in, pretium non nisi.
      </div>
    </li>
    <li>
      <div>
        <time>1940</time> <title>Proin iaculis</title>, nibh eget efficitur varius, libero tellus porta dolor, at pulvinar tortor ex eget ligula. Integer eu dapibus arcu, sit amet sollicitudin eros.
      </div>
    </li>
    <li>
      <div>
        <time>1943</time> <title>In mattis elit</title> vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1946</time> <title>In mattis elit</title> vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1956</time> <title>In mattis elit</title> vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1957</time> <title>In mattis elit</title> vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>1967</time> <title>Aenean condimentum</title> odio a bibendum rhoncus. Ut mauris felis, volutpat eget porta faucibus, euismod quis ante.
      </div>
    </li>
    <li>
      <div>
        <time>1977</time> <title>Vestibulum porttitor</title> lorem sed pharetra dignissim. Nulla maximus, dui a tristique iaculis, quam dolor convallis enim, non dignissim ligula ipsum a turpis.
      </div>
    </li>
    <li>
      <div>
        <time>1985</time> <title>In mattis elit</title> vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2000</time> <title>In mattis elit vitae</title> odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li>
      <div>
        <time>2005</time> <title>In mattis elit</title> vitae odio posuere, nec maximus massa varius. Suspendisse varius volutpat mattis. Vestibulum id magna est.
      </div>
    </li>
    <li></li>
  </ol>
  
  <div class="arrows">
    <button class="arrow arrow__prev disabled" disabled>
      <img src="img/svg/arrow_prev.svg" alt="prev timeline arrow">
    </button>
    <button class="arrow arrow__next">
      <img src="img/svg/arrow_next.svg" alt="next timeline arrow">
    </button>
  </div>

</section>
</div>  

@endsection


@section('javascript')


<script>

(function() {

  // VARIABLES
  const timeline = document.querySelector(".timeline ol"),
    elH = document.querySelectorAll(".timeline li > div"),
    arrows = document.querySelectorAll(".timeline .arrows .arrow"),
    arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
    arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
    firstItem = document.querySelector(".timeline li:first-child"),
    lastItem = document.querySelector(".timeline li:last-child"),
    xScrolling = 280,
    disabledClass = "disabled";

  // START
  window.addEventListener("load", init);

  function init() {
    setEqualHeights(elH);
    animateTl(xScrolling, arrows, timeline);
    setSwipeFn(timeline, arrowPrev, arrowNext);
    setKeyboardFn(arrowPrev, arrowNext);
  }

  // SET EQUAL HEIGHTS
  function setEqualHeights(el) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {
      const singleHeight = el[i].offsetHeight;

      if (counter < singleHeight) {
        counter = singleHeight;
      }
    }

    for (let i = 0; i < el.length; i++) {
      el[i].style.height = `${counter}px`;
    }
  }

  // CHECK IF AN ELEMENT IS IN VIEWPORT
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  // SET STATE OF PREV/NEXT ARROWS
  function setBtnState(el, flag = true) {
    if (flag) {
      el.classList.add(disabledClass);
    } else {
      if (el.classList.contains(disabledClass)) {
        el.classList.remove(disabledClass);
      }
      el.disabled = false;
    }
  }

  // ANIMATE TIMELINE
  function animateTl(scrolling, el, tl) {
    let counter = 0;
    for (let i = 0; i < el.length; i++) {
      el[i].addEventListener("click", function() {
        if (!arrowPrev.disabled) {
          arrowPrev.disabled = true;
        }
        if (!arrowNext.disabled) {
          arrowNext.disabled = true;
        }
        const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
        if (counter === 0) {
          tl.style.transform = `translateX(-${scrolling}px)`;
        } else {
          const tlStyle = getComputedStyle(tl);
          // add more browser prefixes if needed here
          const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
          const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
          tl.style.transform = `translateX(${values}px)`;
        }

        setTimeout(() => {
          isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
          isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
        }, 1100);

        counter++;
      });
    }
  }

  // ADD SWIPE SUPPORT FOR TOUCH DEVICES
  function setSwipeFn(tl, prev, next) {
    const hammer = new Hammer(tl);
    hammer.on("swipeleft", () => next.click());
    hammer.on("swiperight", () => prev.click());
  }

  // ADD BASIC KEYBOARD FUNCTIONALITY
  function setKeyboardFn(prev, next) {
    document.addEventListener("keydown", (e) => {
      if ((e.which === 37) || (e.which === 39)) {
        const timelineOfTop = timeline.offsetTop;
        const y = window.pageYOffset;
        if (timelineOfTop !== y) {
          window.scrollTo(0, timelineOfTop);
        }
        if (e.which === 37) {
          prev.click();
        } else if (e.which === 39) {
          next.click();
        }
      }
    });
  }

})();

</script>

@endsection