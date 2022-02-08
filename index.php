<div id="app">

    <h1>PHP Test</h1>

    <label for="type">Select Type: <select @change="selectType($event)">
        <option v-for="(rType, i) in vType" :key="i" :value="rType.value" >{{ rType.label }}</option>
    </select></label><br>

    <label for="team">Select Team: <select @change="selectTeam($event)">
        <option v-for="(Team, i) in Teams" :key="i" :value="Team.code" >{{ Team.name }}</option>
    </select></label><br>

    <label for="team">Format: <select @change="selectFormat($event)">
        <option value="">Select Format</option>
        <option value="json">JSON</option>
        <option value="xml">XML</option>
    </select></label>

    <br><br>
    <a v-if="sType && sTeam && sFormat"
        :href="`export.php?type=` + sType + `&team=` + sTeam + `&format=` + sFormat"
    >export.php?type={{ sType }}&team={{ sTeam }}&format={{ sFormat }}</a>
    <br><br>

    <!-- <ul>
        <li><a href="export.php?type=playerstats&team=TOR">export.php?type=playerstats&team=TOR</a></li>
        <li><a href="export.php?type=playerstats&position=C">export.php?type=playerstats&position=C</a></li>
        <li><a href="export.php?type=playerstats&player=Steven%20Adams&format=xml">export.php?type=playerstats&player=Steven%20Adams&format=xml</a></li>
        <li><a href="export.php?type=players&player=Steven%20Adams&format=json">export.php?type=players&player=Steven%20Adams&format=json</a></li>
        <li><a href="export.php?type=players&team=HOU&format=xml">export.php?type=players&team=HOU&format=xml</a></li>
    </ul> -->

</div>

<script src="https://unpkg.com/vue@next"></script>
<script>
    let app = Vue.createApp({
        data(){
            return {
                vType: [
                    {
                        label: 'Select a type',
                        value: ''
                    },
                    {
                        label: 'Statistics',
                        value: 'playerstats'
                    },
                    {
                        label: 'Players',
                        value: 'players'
                    },

                ],
                Teams: [
                    {
                        name: 'Select a type',
                        code: ''
                    },
                    {
                        name: 'Boston Celtics',
                        code: 'BOS'
                    },
                    {
                        name: 'Toronto Raptors',
                        code: 'TOR'
                    },

                ],
                sType: '',
                sTeam: '',
                sFormat: ''
            }
        },
        
        methods: {
            selectType(event) {
                this.sType = event.target.value
            },
            selectTeam(event) {
                this.sTeam = event.target.value
            },
            selectFormat(event) {
                this.sFormat = event.target.value
            },
        },
    
    })

    app.mount('#app')
</script>