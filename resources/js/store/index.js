import { createStore } from 'vuex'
import Person from './modules/person.js'


// Create a new store instance.
export default createStore({
    modules: {
        Person
    }
})

