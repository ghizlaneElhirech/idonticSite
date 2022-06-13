<template>
    <div >
        <nav >
            <div >
                <div >
                    <router-link :to="{ name: 'CalendarComponent' }"  class="nav-item nav-link"><p style="color: lightpink; font-size: 30px; text-align: center;">show calender</p></router-link>
                </div>
            </div>
        </nav>
        <router-view> </router-view>
    </div>
</template>

<script>
    export default {}
</script>