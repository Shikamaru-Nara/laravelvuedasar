<template>
    <div>
        <div class="page-header page-header-default alpha-pink">
            <div class="page-header-content">
                <div class="page-title pt-30 pb-10">
                    <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
                </div>
            </div>

            <div class="breadcrumb-line">
                <ul class="breadcrumb pt-10 pb-5">
                    <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                    <li class="active">Dashboard</li>
                </ul>
                <ul class="breadcrumb-elements">
                    <<router-link :to="{ name: 'CreateItem' }" class="btn bg-teal btn-labeled btn-sm"><b><i class="icon-file-plus2"></i></b> Tambah Data</router-link>
                    <!--<li><router-link :to="{ name: 'CreateItem' }" class=""><i class="icon-file-plus2 position-left"></i> Create Item</router-link>-->
                    </li>
                </ul>
            </div>
        </div>
        <div class="content">

            <!-- Basic datatable -->
            <div class="panel panel-flat">
                <div class="panel-heading">
                    <h5 class="panel-title">List data</h5>
                    <div class="heading-elements">
                        <ul class="icons-list">
                            <li><a data-action="reload"></a></li>
                            <li><a data-action="collapse"></a></li>
                            <!--<li><a data-action="close"></a></li>-->
                        </ul>
                    </div>
                </div>

                <table class="table tabelcontoh">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Item Name</td>
                            <td>Item Price</td>
                            <td class="text-center">Actions</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="item in items">
                            <td>{{ item.id }}</td>
                            <td>{{ item.name }}</td>
                            <td>{{ item.price }}</td>
                            <td class="text-center">
                                <router-link :to="{name: 'EditItem', params: { id: item.id }}" class="btn btn-primary btn-xs">Edit</router-link>
                                <button class="btn btn-danger btn-xs" v-on:click="deleteItem(item.id)">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /basic datatable -->

            <!-- Footer -->
            <div class="footer text-muted">
                &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
            </div>
            <!-- /footer -->
        </div>
    </div>
</template>

<script>

    export default {
        data(){
            return{
                items: []
            }
        },

        created: function()
        {
            this.fetchItems();
        },

        methods: {
            fetchItems()
            {
                let uri = '/items';
                this.axios.get(uri).then((response) => {
                    this.items = response.data;
                    // $('.tabelcontoh').DataTable();

            });
            },
            deleteItem(id)
            {
                let uri = `/${id}`;
                this.items.splice(id, 1);
                this.axios.delete(uri);
            }
        }
    }
    $('document').ready(function () {
    })
</script>