<script>
    export default{
        props: ['user'],
        data(){
            return {
                name:'',
                tasks: []
            }
        },
        mounted(){
            this.tasks = this.user.to_do_lists
            console.log('user.' + this.user.id);
            Echo.private('user.' + this.user.id)
                .listen('TaskCreated', event=>{
                    console.log('listen')
                    this.tasks.push(event.task)
                })
        },
        methods:{
            create(){
                axios.post('create-task', {
                    name: this.name,
                    user_id: this.user.id
                })
            }
        }
    }
</script>