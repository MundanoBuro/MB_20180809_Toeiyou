<template>
    <div class="news">
        <div class="wrapper">
            <div class="content">
                <h2>NEWS FEED</h2>
                <ul>
                    <li v-for="item in news" v-bind:key="item.id">
                        <div class="col date">
                           <span> {{ new Date() | moment("YYYY/MM/DD")  }} </span> <br>
                           <span> {{ new Date() | moment("hh:mm")  }} </span>
                        </div>
                        <div class="col text">{{ item.text }}</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  name: 'vNews',

  // Component's created function.
  created () {
   
  },

  // Component's Attributes or data object.
  data () {
    return {
        news : [
            {
                id: 0,
                date : new Date(),
                text: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna '
            },
            {
                 id: 1,
                date : new Date(),
                text: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna '
            },
            {
                 id: 2,
                date : new Date(),
                text: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna '
            },
            {
                 id: 3,
                date : new Date(),
                text: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna '
            },
            {
                 id: 4,
                date : new Date(),
                text: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna '
            },
            {
                 id: 5,
                date : new Date(),
                text: 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna '
            }
        ]
    }
  }
}
</script>

<style scoped lang="less">

ul{list-style: none outside none;}

.news{
    width: 100%;
    box-sizing: border-box;
    padding: 1em;
    background-color: white;
    .wrapper{
       background-color: #e5520f;
        box-sizing: border-box;
        padding: 1em;
        .content{
            box-sizing: border-box;
            padding: 1em;
            background-color: white;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            -webkit-align-content: center;
            -ms-flex-line-pack: center;
            align-content: center;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
        }
    }
}

h2{
    color: green;
    font-size: 1.25em;
}

ul{
    padding: 0px;
    margin: 0px;

    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: flex-start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;
}

li{
     display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-direction: row;
    -ms-flex-direction: row;
    flex-direction: row;
    -webkit-flex-wrap: wrap;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    -webkit-align-content: center;
    -ms-flex-line-pack: center;
    align-content: center;
    -webkit-align-items: flex-start;
    -ms-flex-align: start;
    align-items: flex-start;

    .date{
        -webkit-order: 0;
        -ms-flex-order: 0;
        order: 0;
        -webkit-flex: 0 1 auto;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        -webkit-align-self: auto;
        -ms-flex-item-align: auto;
        align-self: auto;
        width: 10em;
        background-color: green;
        color: white;
        text-align: left;
    }
    .text{
        border-top: 1px solid red;
        -webkit-order: 0;
        -ms-flex-order: 0;
        order: 0;
        -webkit-flex: 1 1 auto;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        -webkit-align-self: auto;
        -ms-flex-item-align: auto;
        align-self: auto;
        width: calc(100% - 25em);
        margin-left: 20px;
        padding-left: 0px;
        font-size:12px;
        text-align: left;

        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-flex-direction: row;
        -ms-flex-direction: row;
        flex-direction: row;
        -webkit-flex-wrap: wrap;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-justify-content: flex-start;
        -ms-flex-pack: start;
        justify-content: flex-start;
        -webkit-align-content: center;
        -ms-flex-line-pack: center;
        align-content: center;
        -webkit-align-items: flex-start;
        -ms-flex-align: start;
        align-items: flex-start;

        span{
            text-align: left;
        }

    }

    &:nth-child(even){
        .date{
            background-color: orange
        }
    }
}

</style>